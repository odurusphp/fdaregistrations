<?php

class Billingcustomers extends Controller{


    public function customersubscriptions(){

       $billingdata =  Billing::getBilling('Subscription');

	   $this->view('billing/customersubscriptions',  $billingdata);
    }

  

}



 ?>
