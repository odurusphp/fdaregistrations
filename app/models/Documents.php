<?php

class Documents extends tableDataObject{

      const TABLENAME = 'documents';

      public static function getdocumentbyproductid($productid){
          global $fdadb;
          $getrecords = "Select * from documents where productid  = $productid";
          $fdadb->prepare($getrecords);
          $fdadb->execute();
          return $fdadb->resultSet();
      }


}



 ?>
