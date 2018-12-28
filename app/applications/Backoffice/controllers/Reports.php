<?php

class Reports extends Controller{

    public function index(){

        $this->view('reports/billingoverview');
    }

    public function jobmonitor(){

        $this->view('reports/jobmonitor');
    }


    public function googlereport(){

        if(isset($_POST['generategooglecsv'])){
            $month = $_POST['_month'];
            $year  = $_POST['_year'];
            $searchname  = $_POST['_searchname'];

            $searchdate = $year.'-'.$month.'-'.'01';
            $googledata = Google::googleReportQuery($searchdate, $searchname);

            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=googlereport.csv');
            $output = fopen('php://output', 'w');
            fputcsv($output, array('Company', 'Account Number', 'Order','Product', 'Description',
                'Interval', 'Domain', 'Quantity', 'Discount', 'Total Supplier Price in EUR',
                'Total Retail Price in EUR', 'Total Price'));

            foreach($googledata as $get){

                $retailprice =  round($get->amount / 0.8, 2);
                $totalprice = Google::totalprice($get->amount, $get->quantity, $get->googlediscount);
                $csvdata = array($get->companyname, $get->accountnumber, $get->ordername, $get->product,
                                 $get->description,$get->intervalvalue, $get->domainname, $get->quantity, $get->googlediscount,
                                 $get->amount, $retailprice, $totalprice
                                 );
                fputcsv($output, $csvdata);
            }
            exit;

        }

        if(isset($_POST['generategooglexml'])){

            $month = $_POST['_month'];
            $year  = $_POST['_year'];
            $searchdate = $year.'-'.$month.'-'.'01';
            $searchname = $_POST['_searchname'];

            $customers = Google::googleReportQueryXml($searchdate, 'All');
            $custsbycommid = array();
            foreach($customers as $customer){
                if(!isset($custsbycommid[$customer->commid])){
                    $custsbycommid[$customer->commid] = array($customer);
                } else {
                    array_push($custsbycommid[$customer->commid], $customer);
                }
            }
            //  print_r($customers);
            $filename = GoogleXml::createGoogleXmlZip($custsbycommid,$searchdate);
            if(!is_null($filename)){
                GoogleXml::getgooleXmlzip($filename);
            }

            exit();

        }

        if(isset($_POST['searchdata'])){
            $customerdata = Customer::listCustomers();
            $month = $_POST['month'];
            $year  = $_POST['year'];
            $searchdate = $year.'-'.$month.'-'.'01';
            $searchname = $_POST['searchname'];

            $googledata = Google::googleReportQuery($searchdate, $searchname);
            $data  = ['googledata'=>$googledata, 'customerdata'=>$customerdata];

            $this->view('reports/googlereport', $data);
        }

        if(!isset($_POST['generategooglecsv']) || !isset($_POST['generategooglexml']) || isset($_POST['searchdata']) ){
            $customerdata = Customer::listCustomers();
            $data = ['customerdata'=>$customerdata];
            $this->view('reports/googlereport', $data);
        }




    }


    public function microsoftlog(){

        $customerdata = Customer::listCustomers();
        $data = ['customerdata'=>$customerdata];

        if(isset($_POST['searchdata'])){

            $month = $_POST['month'];
            $year = $_POST['year'];
            $searchname = $_POST['searchname'];
            $searchdate = $year.'-'.$month;
            $filter = $_POST['filter'];
            if($filter == 'Office 366'){
                $billingdata = MsTestData::MsLog($searchdate, $searchname);
                $data = ['msbillingdata'=>$billingdata,  'customerdata'=>$customerdata];
                $this->view('reports/microsoftlog', $data);
            }


            }else{
                $this->view('reports/microsoftlog', $data);
            }
     }

    private static function microsoftbilling($month, $year, $searchname, $filter){

        $logdate = $year.'-'.$month;

        $billingdata = [];
        $msbillingdata = [];
        $officedata = MsSubscription::getMonthlyOffice365($logdate,$searchname,$filter);
        $p_od = OfficeProcessor::processO365Month($officedata);
        $billingdata = OfficeProcessor::processO365MonthForXML($p_od);



        foreach($billingdata as $key=>$bdata){

           foreach($bdata as $bk){

              $numberofdays = MsSubscription::numberofDays($bk->datediff);
              $listedprice = MsSubscription::office365listedprice($bk->erp, $numberofdays, $bk->quantity);
              $totalprice  = MsSubscription::office365totalprice($bk->erp, $numberofdays, $bk->quantity, $bk->discount);

              $msbillingdata[] = ['company'=>$bk->companyname, 'tenantid'=>$bk->tenantid,'erpprice'=>round($bk->erp,2),
                                  'offerid'=>$bk->offerid, 'offername'=>$bk->offername, 'commid'=>$bk->commid,
                                  'quantity'=>round($bk->quantity,2),'discount'=>$bk->discount, 'listedprice'=>round($listedprice,2),
                                  'totalprice'=>round($totalprice,2), 'subscriptionid'=>$bk->id,
                                  'datespan'=> $bk->datespan
                                  ];
            }
        }


        return $msbillingdata;

    }


    public static function azurebilling($month, $year, $searchname, $filter){

        $logdate = $year.'-'.$month;
        $query_date =  $year.'-'.$month.'-'.'01';
        $startdate  =  date('Y-m-01', strtotime($query_date));
        $enddate =   date('Y-m-t', strtotime($query_date));
        $msazuredata  =  MsSubscription::getMonthlyAzure($startdate,  $enddate,  $searchname, $filter);
        $azbillingdata = [];
        foreach($msazuredata as $az){
            //$rate = (array) unserialize($az->rate);
            $serializedrate = $az->rate;
            $quantity = round($az->quantity, 6);
            $resourceid = $az->resourceid;

            $resourcecategory = $az->resourcecategory;
            if($resourcecategory == ''){$resourcecategory = AzurePrices::getResourceCategory($resourceid);}
            $resourcesubcategory = $az->resourcesubcategory;
            if($resourcesubcategory  == ''){$resourcesubcategory  = AzurePrices::getResourceSubCategory($resourceid);}
            $resourcename = $az->resourcename;
            if($resourcename == ''){$resourcename = AzurePrices::getResourceName($resourceid);}

            $company = $az->companyname;
            $discount = $az->azurediscount;
            $offername = $resourcecategory . ' - '.$resourcesubcategory.' - '.$resourcename;
            $usageStart = $az->usageStart;

            if($resourcename == ''){
              $offername = $resourcecategory.' - '.$resourcesubcategory;
            }
            if($resourcecategory == ''){
              $offername = $resourcesubcategory.' - '.$resourcename;
            }

            if($resourcesubcategory == ''){
              $offername =  $resourcecategory . ' - '.$resourcename;
            }

            if($resourcename == '' && $resourcesubcategory == '' ){
              $offername = $resourcecategory;
            }

            if($resourcename == '' && $resourcecategory == '' ){
              $offername = $resourcesubcategory;
            }

            if($resourcesubcategory == '' && $resourcecategory == '' ){
              $offername = $resourcename;
            }


            $rate = AzureXml::getAzureRateForQuantity($quantity,$serializedrate);
            $azure = MsSubscription::azcalc($rate, $quantity, $discount,false);

            $listedprice = $azure['listedprice'];
            $totalprice  = $azure['totalprice'];

            // $query_date =  $year.'-'.$month.'-'.'01';
            // $startdate  =  date('Y-m-01', strtotime($query_date));
            // $enddate =   date('Y-m-t', strtotime($query_date));
            $datespan =  $usageStart . ' | '.$enddate;


            $azbillingdata[] = ['company'=>$company, 'tenantid'=>$az->tenantid, 'erpprice'=>number_format($rate,6),
                                'offerid'=>$resourceid, 'offername'=>$offername, 'commid'=>$az->commid,
                                'quantity'=>$quantity, 'discount'=>$discount, 'listedprice'=>number_format($listedprice,6),
                                'totalprice'=>number_format($totalprice,6), 'subscriptionid'=>$az->subscriptionid,
                                'datespan'=>$datespan,
                                'resourcename'=>$resourcename,
                                'resourcecategory'=>$resourcecategory,
                                'resourcesubcategory'=>$resourcesubcategory,
                                'rate'=>$az->rate,
                                'datestart'=>$usageStart,
                                'dateend'=>$enddate
                                ];
        }

        return $azbillingdata;
    }

    public function microsoftreport(){

        $customerdata = Customer::listCustomers();

      if(isset($_POST['searchdata'])){

            $month = $_POST['month'];
            $year = $_POST['year'];
            $filter = $_POST['filter'];
            $searchname = $_POST['searchname'];

            $postdata = ['month'=>$month, 'year'=>$year, 'filter'=>$filter, 'searchname'=>$searchname];


            if($filter == 'Office 365 Global' ||  $filter == 'Office 365 DE' ||  $filter == 'Office 365 For All' ){

                $msbillingdata = self::microsoftbilling($month, $year, $searchname, $filter);
                $data = ['msbillingdata'=>$msbillingdata,  'customerdata'=>$customerdata , 'postdata'=>$postdata];

            }elseif($filter == 'Azure Global' ||  $filter == 'Azure DE'){

                $azurebillingdata = self::azurebilling($month, $year, $searchname, $filter);
                $data = ['msbillingdata'=>$azurebillingdata,  'customerdata'=>$customerdata, 'postdata'=>$postdata];

            }elseif($filter == 'All'){

                $msbillingdata = self::microsoftbilling($month, $year, $searchname, $filter);
                $azurebillingdata = self::azurebilling($month, $year, $searchname, $filter);

                if(is_array($msbillingdata) && is_array($azurebillingdata)){
                    $msbillingdata = self::microsoftbilling($month, $year, $searchname, $filter);
                    $azurebillingdata = self::azurebilling($month, $year, $searchname, $filter);
                    $alldata =  array_merge($msbillingdata, $azurebillingdata);
                    usort($alldata, array($this, "compareoffice"));

                }elseif(!is_array($msbillingdata) && is_array($azurebillingdata)){
                    $alldata = self::azurebilling($month, $year, $searchname, $filter);


                }elseif(is_array($msbillingdata) && !is_array($azurebillingdata)){
                    $alldata = self::microsoftbilling($month, $year, $searchname, $filter);

                }

                $data = ['msbillingdata'=>$alldata,  'customerdata'=>$customerdata, 'postdata'=>$postdata];
            }

            $this->view('reports/microsoftreport', $data);

        }

        if(isset($_POST['generatemicrosoftxml'])){

            $month = $_POST['_month'];
            $year = $_POST['_year'];
            $filter = $_POST['_filter'];
            $searchname = $_POST['_searchname'];
            $searchdate  = $year.'-'.$month;



            if($filter == 'Office 365 Global' ||  $filter == 'Office 365 DE' ){

                $filename = OfficeProcessor::o365XML($searchdate, $searchname, $filter);
                if(!is_null($filename)){
                  OfficeProcessor::officezureXmlzip($filename);
                }

            }elseif($filter == 'Azure Global' ||  $filter == 'Azure DE'){

                $azurebillingdata = self::azurebilling($month, $year, $searchname, $filter);
                $azurebillingdata = json_decode (json_encode ($azurebillingdata), FALSE);
                $custsbycommid = array();
                foreach($azurebillingdata as $customer){
                    if(!isset($custsbycommid[$customer->commid])){
                        $custsbycommid[$customer->commid] = array($customer);
                    } else {
                        array_push($custsbycommid[$customer->commid], $customer);
                    }
                }
             $filename = AzureXml::createAzureXmlZip($custsbycommid,$searchdate);
             if(!is_null($filename)){
                 AzureXml::getazureXmlzip($filename);
             }



            }elseif($filter == 'All'){

                $msbillingdata = self::microsoftbilling($month, $year, $searchname, $filter);
                $azurebillingdata = self::azurebilling($month, $year, $searchname, $filter);

                if(is_array($msbillingdata) && is_array($azurebillingdata)){
                    $msbillingdata = self::microsoftbilling($month, $year, $searchname, $filter);
                    $azurebillingdata = self::azurebilling($month, $year, $searchname, $filter);
                    $alldata =  array_merge($msbillingdata, $azurebillingdata);


                }elseif(!is_array($msbillingdata) && is_array($azurebillingdata)){
                    $alldata = self::azurebilling($month, $year, $searchname, $filter);


                }elseif(is_array($msbillingdata) && !is_array($azurebillingdata)){
                    $alldata = self::microsoftbilling($month, $year, $searchname, $filter);
                }

                $data = ['msbillingdata'=>$alldata,  'customerdata'=>$customerdata];
            }

        }


        if(isset($_POST['generatemicrosoftcsv'])){

            $month = $_POST['_month'];
            $year = $_POST['_year'];
            $filter = $_POST['_filter'];
            $searchname = $_POST['_searchname'];
            $searchdate  = $year.'-'.$month;

            if($filter == 'Office 365 Global' ||  $filter == 'Office 365 DE' || $filter == 'Office 365 For All'){

                $msbillingdata = self::microsoftbilling($month, $year, $searchname, $filter);

                header('Content-Type: text/csv; charset=utf-8');
                header('Content-Disposition: attachment; filename=office365bills.csv');
                $output = fopen('php://output', 'w');
                fputcsv($output, array('Customer Name',	'Commehr Customer ID',	'Offer Name',
                	'Quantity', 'Date Span',  'Product-price/month in EUR (30 days)',	'List Price',
                  	'Discount(%)', 	'Total price in EUR'));

                foreach($msbillingdata as $get){

                    $csvdata = array($get['company'], $get['commid'], $get['offername'], $get['quantity'],
                                     $get['datespan'], $get['erpprice'], $get['listedprice'],
                                     $get['discount'], $get['totalprice']
                                     );
                    fputcsv($output, $csvdata);
                }
                exit;

            }elseif($filter == 'Azure Global' ||  $filter == 'Azure DE'){

                $azurebillingdata = self::azurebilling($month, $year, $searchname, $filter);

                header('Content-Type: text/csv; charset=utf-8');
                header('Content-Disposition: attachment; filename=azurebills.csv');
                $output = fopen('php://output', 'w');
                fputcsv($output, array('Customer Name',	'Commehr Customer ID', 'Offer Name',
                 	'Quantity', 'Date Start', 'Date End', 'Product-price/month in EUR (30 days)',
                  'List Price', 'Discount(%)', 'Total price in EUR'));

                foreach($azurebillingdata as $get){

                    $csvdata = array($get['company'], $get['commid'], $get['offername'], $get['quantity'],
                                     $get['datestart'],$get['dateend'], $get['erpprice'], $get['listedprice'],
                                     $get['discount'], $get['totalprice']
                                     );
                    fputcsv($output, $csvdata);
                }
                exit;


            }elseif($filter == 'All'){

                $msbillingdata = self::microsoftbilling($month, $year, $searchname, $filter);
                $azurebillingdata = self::azurebilling($month, $year, $searchname, $filter);

                if(is_array($msbillingdata) && is_array($azurebillingdata)){
                    $msbillingdata = self::microsoftbilling($month, $year, $searchname, $filter);
                    $azurebillingdata = self::azurebilling($month, $year, $searchname, $filter);
                    $alldata =  array_merge($msbillingdata, $azurebillingdata);

                }elseif(!is_array($msbillingdata) && is_array($azurebillingdata)){
                    $alldata = self::azurebilling($month, $year, $searchname, $filter);


                }elseif(is_array($msbillingdata) && !is_array($azurebillingdata)){
                    $alldata = self::microsoftbilling($month, $year, $searchname, $filter);
                }

                $data = ['msbillingdata'=>$alldata,  'customerdata'=>$customerdata];
            }

        }

        if(!isset($_POST['searchdata']) || !isset($_POST['generatemicrosoftxml']) ||  !isset($_POST['generatemicrosoftcsv'])){
            $data = ['customerdata'=>$customerdata];
            $this->view('reports/microsoftreport', $data);
        }

    }


    public function monitoringreports(){

        if(isset($_POST['searchdata'])){

            $month = $_POST['month'];
            $year  = $_POST['year'];
            $searchdate = $year.'-'.$month.'-'.'01';

            $monitoringdata = MonitoringData::MonitoringList($searchdate);
            $data  = ['monitoringdata'=>$monitoringdata];
            $this->view('reports/monitoringreports', $data);

        }
        else{
            $customerdata = Customer::listCustomers();
            $data = ['customerdata'=>$customerdata];
            $this->view('reports/monitoringreports', $data);
        }


    }

    public function otherreports(){

        if(isset($_POST['generatecsv'])){
            $csvheader =  array('Company', 'Commehr Customer ID', 'Category', 'Quantity','Exchange Qty', 'Encryption Qty', 'Date');

            $month = $_POST['_month'];
            $year  = $_POST['_year'];
            $searchname  = $_POST['_searchname'];
            // $searchname = $_POST['searchname'];
            $searchdate = $year.'-'.$month.'-'.'01';

            $antispamdate =  $year.'-'.$month;

            $bitdata = OtherReport::getbitrecords($searchdate, $searchname);
            $clientdata = OtherReport::getclientrecords($searchdate, $searchname);
            $antispamdata = OtherReport::getantispamrecords($antispamdate, $searchname);

            $alldata =  array_merge($bitdata, $clientdata, $antispamdata);
            usort($alldata, array($this, "compare"));


            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=otherreport.csv');
            $output = fopen('php://output', 'w');
            fputcsv($output, array('Company', 'Commehr Customer ID', 'Category', 'Quantity', 'Exchange Qty', 'Encryption Qty', 'Date'));

            foreach($alldata as $get){
                $companyname = $get->company;
                $commid = $get->commid;
                $category = $get->source;
                $quantity = $get->quantity;
                if($category == 'Bitdefender'){
                    $exchangequantity = $get->exchangequantity;
                    $encryptionquantity = $get->encryptionquantity;
                }
                $date = $get->effective_date;
                $csvdata = array($companyname, $commid, $category, $quantity, $exchangequantity, $encryptionquantity, $date);
                fputcsv($output, $csvdata);

                // we need to null all of our quantities at each stage in the loop
                foreach(['quantity','exchangequantity','encryptionquantity'] as $zeroMe){
                    $$zeroMe = 0;
                }
            }

        }

        if(isset($_POST['generatexml'])){
            $month = $_POST['_month'];
            $year  = $_POST['_year'];
            $searchname  = $_POST['_searchname'];
            // $searchname = $_POST['searchname'];
            $searchdate = $year.'-'.$month;
            $ox = new OtherReportXml();
            $filename = $ox->xmlAll($searchdate);

            if(isset($filename)){
                $ox->getXmlzip($filename);
            }

        }





        if(isset($_POST['searchdata'])){

            $customerdata = Customer::listCustomers();

            $month = $_POST['month'];
            $year  = $_POST['year'];
            $searchname = $_POST['searchname'];
            $searchdate = $year.'-'.$month;

            $bitdata = OtherReport::getbitrecords($searchdate, $searchname);
            $clientdata = OtherReport::getclientrecords($searchdate, $searchname);
            $antispamdata = OtherReport::getantispamrecords($searchdate, $searchname);

            if(!is_array($bitdata)) $bitdata = [];
            if(!is_array($bitdata)) $clientdata = [];
            if(!is_array($antispamdata)) $antispamdata = [];

            $alldata =  array_merge($bitdata, $clientdata, $antispamdata);
            usort($alldata, array($this, "compare"));


            $number = OtherReport::getEmptyCommehrID($searchdate);


            $data  = ['otherdata'=>$alldata, 'customerdata'=>$customerdata, 'numloss'=> $number];

            $this->view('reports/otherreports', $data);

        }

        if(!isset($_POST['generatecsv'])){

            $customerdata = Customer::listCustomers();
            $data = ['customerdata'=>$customerdata];
            $this->view('reports/otherreports', $data);

        }

    }

    /*
     * quick function to help sorting data for otherreports
     */
    public function compare($a, $b){
        return strcmp(strtolower($a->company), strtolower($b->company));
    }

    public function compareoffice($a, $b){
        return strcmp(strtolower($a['company']), strtolower($b['company']));
    }


    public function logfiles(){
        $this->view('reports/logfiles');
    }

    public function activedirectory(){

        $activedata = ActiveDirectory::getActiveDirectory();
        $data = ['activedirectory'=> $activedata ];
        $this->view('reports/activedirectory', $data);


    }








}

?>
