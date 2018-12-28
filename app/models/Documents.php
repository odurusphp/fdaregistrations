<?php

class Documents extends tableDataObject{

      const TABLENAME = 'documents';

      public static function getdocumentbyproductid($productid){
          global $realestatedb;
          $getrecords = "Select * from documents where productid  = $productid";
          $realestatedb->prepare($getrecords);
          $realestatedb->execute();
          return $realestatedb->resultSet();
      }


}



 ?>
