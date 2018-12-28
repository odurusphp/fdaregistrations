<?php

class Basicinformation extends tableDataObject{


    const TABLENAME = 'basicinformation';

     public static function getBasicid($uid){
        global $fdadb;
        $getrecords = "select basicid from basicinformation where uid = $uid ";
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->singleRecord();
    }



  }


 ?>
