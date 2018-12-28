<?php

class Furnishing extends tableDataObject{


    const TABLENAME = 'furnishing';

    public static function getAllFurnishing(){
         global $realestatedb;
         $getrecords = "Select property.*, basicinformation.*  from property  inner join 
         basicinformation  where  basicinformation.uid = property.uid ";
    
         $realestatedb->prepare($getrecords);
         $realestatedb->execute();
         return $realestatedb->resultSet();
    }


   

}



?>