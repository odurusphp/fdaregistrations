<?php

class Pages extends Controller{


   public function index(){
    $this->view( 'pages/index');
	}

	public function logout(){
	  $uid = $_SESSION['uid'];

    if(isset($uid)){
	  session_unset($uid);
    }
	  header('Location:'.URLROOT.'/backoffice/pages');
	}

	public function dashboard(){

	   $customerdata =  Customer::getAllCustomers();
	   $this->view( 'pages/dashboard', $customerdata);
	}

	public function bookconfig(){

		$bookdata =  BookingConfig::getbooking();

		if(isset($_POST['addbooking'])){

		$bkdata = new BookingConfig();
		$datarow =&  $bkdata->recordObject;
		$datarow->bookingname = $_POST['bookingname'];
		$datarow->bookingtype = $_POST['bookingtype'];
		$datarow->period = $_POST['period'];
		$bkdata->store();


		$bookdata = BookingConfig::getbooking();
		$this->view('pages/bookingconfig', $bookdata ) ;

		}else{
			$bookdata =  BookingConfig::getbooking();
		    $this->view('pages/bookingconfig', $bookdata );
	   }


	}

	public function features(){

		$ftdata =  FeatureData::getfeatures();

		if(isset($_POST['addfeature'])){

		$fkdata = new FeatureData();
		$datarow =&  $fkdata->recordObject;
		$datarow->featurename = $_POST['featurename'];
		$fkdata->store();


		$fkdata = FeatureData::getfeatures();
		$this->view('pages/features', $fkdata ) ;

		}else{
			$ftdata =  FeatureData::getfeatures();
		    $this->view('pages/features', $ftdata );
	   }


	}




	public function charges(){

		$chdata =  ChargesData::getCharges();

		if(isset($_POST['addcharges'])){

		$chargesdata = new ChargesData();
		$datarow =&  $chargesdata->recordObject;
		$datarow->taxname = $_POST['chargesname'];
		$datarow->taxpercent  = $_POST['chargespercent'];
		$chargesdata->store();


		$chdata =   ChargesData::getCharges();
		$this->view('pages/charges', $chdata) ;

		}else{
			$chdata =   ChargesData::getCharges();
			$this->view('pages/charges', $chdata);
		}


			}


	public function subscriptions(){

		$subdata =  Subscription::getSubscriptions();

		if(isset($_POST['addsubscription'])){

			$subscriptiondata = new Subscription();
            $datarow =&  $subscriptiondata->recordObject;
            $datarow->subscription_name = $_POST['subname'];
			$datarow->amount = $_POST['amount'];
			$datarow->months = $_POST['numberofmonths'];
			$datarow->bedrooms = $_POST['numberofbedrooms'];
			$datarow->numberofuploads = $_POST['numberofuploads'];
			$subscriptiondata->store();


			$subdata =  Subscription::getSubscriptions();
			$this->view('pages/subscriptions', $subdata);

		}else{
            $this->view( 'pages/subscriptions',  $subdata);
		}

	 }

	 public function rentalcharges(){


		 if(isset($_POST['addrentcharge'])){

			 $rentdata = new Rentalcharges();
			 $datarow =&  $rentdata->recordObject;
			 $datarow->description = $_POST['description'];
			 $datarow->months = $_POST['months'];
			 $datarow->bedrooms = $_POST['numberofbedrooms'];
			 $datarow->percentagecharge = $_POST['percentagecharge'];
			 $rentdata->store();


			 $rentaldata =  Rentalcharges::ListAll();
			 $this->view('pages/rentalcharges', $rentaldata);

		 }else{
			 		 $rentaldata =  Rentalcharges::ListAll();
						$this->view( 'pages/rentalcharges', $rentaldata);
		 }

		}



	public function manageusers(){

		$alluserdata =  User::listAll();
		$this->view( 'pages/manageusers', $alluserdata);
	}

	public function editusers($userid){

		$u = new User($userid);
		$userdata = $u->recordObject;
		$alluserdata =  User::getUsers();
		$data = ['alluserdata'=>$alluserdata, 'user'=> $userdata];
		$this->view( 'pages/editusers', $data);
	}


	public function adduser(){
		$alluserdata =   User::listAll();
		$dataresponse  = ['customerdata'=>$alluserdata];
		$this->view( 'pages/adduser', $dataresponse);

	}

	public function property(){

	   $propertydata =  Property::getAllProperties();
	   $data = ['propertydata'=> $propertydata];
	   // echo '<pre>';
	   // print_r($propertydata);
	   // exit;
		$this->view('property/property', $data);
	}

	public function editproperty($propertyid){

		//$propertydata =  Property::getAllProperties();

		$property = new Property($propertyid);

		$propertydata = [
			              'propertytitle'=>$property->recordObject->propertytitle,
						 'propertyid'=>$propertyid,
						 'type'=>$property->recordObject->type,
						 'rooms'=>$property->recordObject->rooms,
						  'price'=>$property->recordObject->price,
						  'bathrooms'=>$property->recordObject->bedrooms,
						  'bedrooms'=>$property->recordObject->bathrooms,
						  'buildingage'=>$property->recordObject->buildingage,
						  'description'=>$property->recordObject->description,
						  'area'=>$property->recordObject->area,
						  'randomnumber'=>$property->recordObject->randomnumber,
						  'latitude'=>$property->recordObject->latitude,
						  'longitude'=>$property->recordObject->longitude,
						  'listingstatus'=>$property->recordObject->listingstatus
						];

	$randonnumber = $property->recordObject->randomnumber;
    $docdata =  Property::getdocuments($randonnumber);
	$userdata = Customer::getCustomerByUserId($property->recordObject->uid);
    $data = ['propertydata'=>$propertydata, 'pictures'=>$docdata, 'userdata'=>$userdata];

		$this->view( 'property/editproperty', $data);
	}


	public function pictures(){

		$picid = $_POST['picid'];
	    $docdata = new Documents($picid);
		$docdata = $docdata->recordObject;
		$this->view('property/pictures', $docdata);
	}

	public function activecustomers(){
        $basicdata = Basicinformation::ListAll();
		//print_r($basicdata);
		$this->view('pages/activecustomers', $basicdata);
	}


	public function pendingcustomers(){
    $ba = Tempregistry::ListAll();
		$basicdata = $ba->recordObject;
		$this->view('pages/pendingcustomers', $basicdata);
	}

  public function category(){
    $catdata = Category::listAll();
    $data = ['catdata'=>$catdata];
    $this->view('pages/category', $data);

  }

  public function subcategory(){
    $catdata = Category::listAll();
    $subdata = Category::getsubcategory();
    $data = ['catdata'=>$catdata,'subdata'=>$subdata];
    $this->view('pages/subcategory', $data);

  }

  public function productlisting(){
    $productdata =  Products::listproducts();
    $catdata = Category::listAll();
    $data = ['productdata'=>$productdata, 'catdata'=>$catdata];
    $this->view('pages/productlisting', $data);
  }

  public function productdetails($productid){
    $productdata =  Products::listproductsbyProductid($productid);
    $catdata = Category::listAll();
    $docdata = Documents::getdocumentbyproductid($productid);
    $data = ['productdata'=>$productdata, 'catdata'=>$catdata, 'docdata'=>$docdata];
    $this->view('pages/productdetails', $data);
  }











}



?>
