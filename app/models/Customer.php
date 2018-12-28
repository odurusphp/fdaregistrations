<?php

class Customer extends tableDataObject{


    const TABLENAME = 'basicinformation';

    public static function getAllCustomers(){
        global $fdadb;
        $getrecords = "select  basicinformation.firstname,
        basicinformation.lastname, basicinformation.phone,
        users.email, users.datecreated
        from basicinformation inner join users  on
        basicinformation.uid  = users.uid ";

         $fdadb->prepare($getrecords);
         $fdadb->execute();
        return $fdadb->resultSet();
    }

    public static function getCustomerByUserId($uid){
        global $fdadb;
        $getrecords = "select * from basicinformation where uid = '$uid' ";
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->singleRecord();
    }


    public static function testApplication($value){

        if(is_null($value)){
            return 'Unknown';
        }
    }

}

?>
