<?php

class Customer extends tableDataObject{


    const TABLENAME = 'basicinformation';

    public static function getAllCustomers(){
        global $realestatedb;
        $getrecords = "select  basicinformation.firstname,
        basicinformation.lastname, basicinformation.phone,
        users.email, users.datecreated
        from basicinformation inner join users  on
        basicinformation.uid  = users.uid ";

         $realestatedb->prepare($getrecords);
         $realestatedb->execute();
        return $realestatedb->resultSet();
    }

    public static function getCustomerByUserId($uid){
        global $realestatedb;
        $getrecords = "select * from basicinformation where uid = '$uid' ";
        $realestatedb->prepare($getrecords);
        $realestatedb->execute();
        return $realestatedb->singleRecord();
    }


    public static function testApplication($value){

        if(is_null($value)){
            return 'Unknown';
        }
    }

}

?>
