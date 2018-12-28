<?php

class Billing extends tableDataObject{


    const TABLENAME = 'billing';

    public static function getBilling($type){
        global $fdadb;
        $getrecords = "select  basicinformation.firstname, 
        basicinformation.lastname, basicinformation.phone, basicinformation.email,
        billing.* from billing left join basicinformation  on  
        billing.uid  = basicinformation.uid  where billing.billingtype = '$type' ";
    
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->resultSet();
    }


    

    

}

?>