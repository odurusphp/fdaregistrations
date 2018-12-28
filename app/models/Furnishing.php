<?php

class Furnishing extends tableDataObject{


    const TABLENAME = 'furnishing';

    public static function getAllFurnishing(){
         global $fdadb;
         $getrecords = "Select property.*, basicinformation.*  from property  inner join 
         basicinformation  where  basicinformation.uid = property.uid ";
    
         $fdadb->prepare($getrecords);
         $fdadb->execute();
         return $fdadb->resultSet();
    }


   

}



?>