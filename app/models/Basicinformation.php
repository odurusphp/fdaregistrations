<?php

class Basicinformation extends tableDataObject{


    const TABLENAME = 'basicinformation';

     public static function getBasicid($uid){
        global $realestatedb;
        $getrecords = "select basicid from basicinformation where uid = $uid ";
        $realestatedb->prepare($getrecords);
        $realestatedb->execute();
        return $realestatedb->singleRecord();
    }



  }


 ?>
