<?php

class Property extends tableDataObject{


    const TABLENAME = 'property';

    public static function getAllProperties(){
         global $fdadb;
         $getrecords = "Select property.*, basicinformation.*  from property  inner join 
         basicinformation  where  basicinformation.uid = property.uid ";
    
         $fdadb->prepare($getrecords);
         $fdadb->execute();
         return $fdadb->resultSet();
    }


    public static function getdocuments($randonnumber){
        global $fdadb;
        $getrecords = "Select * from documents where randomnumber = '$randonnumber' ";
   
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->resultSet();
   }


}



?>