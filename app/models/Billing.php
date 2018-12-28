<?php

class Billing extends tableDataObject{


    const TABLENAME = 'billing';

    public static function getBilling($type){
        global $realestatedb;
        $getrecords = "select  basicinformation.firstname, 
        basicinformation.lastname, basicinformation.phone, basicinformation.email,
        billing.* from billing left join basicinformation  on  
        billing.uid  = basicinformation.uid  where billing.billingtype = '$type' ";
    
        $realestatedb->prepare($getrecords);
        $realestatedb->execute();
        return $realestatedb->resultSet();
    }


    

    

}

?>