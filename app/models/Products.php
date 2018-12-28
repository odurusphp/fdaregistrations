<?php

class Products extends tableDataObject{

  const TABLENAME = 'products';

  public static function listproducts($productid = null){
      global $realestatedb;
      $stmt = $productid == null ? '' : 'where productid='.$productid;
      $getrecords = "SELECT * from products inner join category on category.catid = products.catid $stmt  ";
      $realestatedb->prepare($getrecords);
      $realestatedb->execute();
      return $realestatedb->resultSet();
  }

  public static function listproductsbyProductid($productid){
      global $realestatedb;
      $stmt = 'where productid='.$productid;
      $getrecords = "SELECT * from products inner join category on category.catid = products.catid $stmt  ";
      $realestatedb->prepare($getrecords);
      $realestatedb->execute();
      return $realestatedb->singleRecord();
  }

}
