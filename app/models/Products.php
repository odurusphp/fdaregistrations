<?php

class Products extends tableDataObject{

  const TABLENAME = 'products';

  public static function listproducts($productid = null){
      global $fdadb;
      $stmt = $productid == null ? '' : 'where productid='.$productid;
      $getrecords = "SELECT * from products inner join category on category.catid = products.catid $stmt  ";
      $fdadb->prepare($getrecords);
      $fdadb->execute();
      return $fdadb->resultSet();
  }

  public static function listproductsbyProductid($productid){
      global $fdadb;
      $stmt = 'where productid='.$productid;
      $getrecords = "SELECT * from products inner join category on category.catid = products.catid $stmt  ";
      $fdadb->prepare($getrecords);
      $fdadb->execute();
      return $fdadb->singleRecord();
  }

}
