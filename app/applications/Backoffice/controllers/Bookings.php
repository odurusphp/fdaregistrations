<?php

class Bookings extends Controller{

  public function customerbookings(){

      $bookingdata =  Booking::getallbooking();
      // echo '<pre>';
      // print_r($bookingdata);
      // exit;

      $newbookingdata  = [];

      foreach($bookingdata as $get){
        //$name =  $get->firstname.' '.$get->lastname;
        $email = $get->email;
        $rooms = $get->rooms;
        $arrivaldate = $get->arrivaldate;
        $departuredate = $get->departuredate;
        $propertyid = $get->propertyid;
        $bookingid = $get->bookingid;
        $phone = $get->phone;

        //$pro = new Property($propertyid);
        $name = $get->firstname . '  '. $get->lastname;
        //$propertytitle = $pro->recordObject->propertytitle;
        $newbookingdata[] = ['name'=>$name, 'email'=>$email, 'rooms'=>$rooms, 
                            'bookingid'=>$bookingid, 'arrival'=>$arrivaldate, 'departure'=>$departuredate,
                             'phone'=>$phone];

      }

      $bkdata = ['bookingdata'=>$newbookingdata];
      $this->view('billing/customerbookings',  $bkdata);
  }

  public function bookingdetails($bookingid){

       $bk = Booking::getBookingbyId($bookingid);
       //$bk =& $bkdata->recordObject;
       $userid = $bk->uid;
       $propertyid = $bk->propertyid;
       $rooms = $bk->rooms;
       $bookingdate =  $bk->datebooked;
       $arrivaldate = $bk->arrivaldate;
       $departuredate = $bk->departuredate;

       $customerbasicid = User::getUserBasicid($userid);


       $customerdata = new Basicinformation($customerbasicid);
       $cus =& $customerdata->recordObject;
       $customername = $cus->firstname.' '.$cus->lastname;
       $customeremail = $cus->email;
       $customertelephone = $cus->phone;
       $customerpassport = $cus->passport;
       $customeraddress = $cus->useraddress;
       $customerpic = $cus->filename;

       $prodata = new Property($propertyid);
       $pro =& $prodata->recordObject;
       $ownerid = $pro->uid;

       $basicinfo = Basicinformation::getBasicid($ownerid);
       $ownerbasicid = $basicinfo->basicid;
       //print_r($ownerbasicid);
       //exit;

       $ownerdata = new Basicinformation($ownerbasicid);
       $ow =& $ownerdata->recordObject;
       $ownername = $ow->firstname.' '.$ow->lastname;
       $owneremail = $ow->email;
       $ownertelephone = $ow->phone;
       $ownerpic = $ow->filename;




       $propertydata = ['propertytitle'=>$pro->propertytitle,
             					   'type'=>$pro->type,
             						 'rooms'=>$pro->rooms,
             						  'price'=>$pro->price,
             						  'bathrooms'=>$pro->bedrooms,
             						  'bedrooms'=>$pro->bathrooms,
             						  'buildingage'=>$pro->buildingage,
             						  'description'=>$pro->description,
             						  'area'=>$pro->area,
             						  'randomnumber'=>$pro->randomnumber,
             						  'latitude'=>$pro->latitude,
             						  'longitude'=>$pro->longitude
   					            ];
       $bookingdata = ['arrivaldate'=>$arrivaldate,  'departuredate'=>$departuredate, 'bookingdate'=>$bookingdate,
                       'roomsbooked'=>$rooms];

      $ownerdata = ['name'=>$ownername, 'email'=>$owneremail, 'telephone'=>$ownertelephone, 'picture'=>$ownerpic];

      $customerdata = ['name'=>$customername, 'email'=>$customeremail, 'telephone'=>$customertelephone,
                       'passport'=>$customerpassport, 'address'=>$customeraddress, 'picture'=>$customerpic];

       $data = ['bookingdata'=>$bookingdata, 'propertydata'=>$pro,
               'ownerdata'=>$ownerdata, 'customerdata'=>$customerdata];


      $this->view('pages/bookingdetails',  $data);
  }

}


?>
