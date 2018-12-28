<?php

class Property extends tableDataObject{


    const TABLENAME = 'property';

    public static function getAllProperties(){
         global $realestatedb;
         $getrecords = "Select property.*, basicinformation.*  from property  inner join 
         basicinformation  where  basicinformation.uid = property.uid ";
    
         $realestatedb->prepare($getrecords);
         $realestatedb->execute();
         return $realestatedb->resultSet();
    }


    public static function getdocuments($randonnumber){
        global $realestatedb;
        $getrecords = "Select * from documents where randomnumber = '$randonnumber' ";
   
        $realestatedb->prepare($getrecords);
        $realestatedb->execute();
        return $realestatedb->resultSet();
   }


}



?>