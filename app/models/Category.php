<?php

class Category extends tableDataObject{

  const TABLENAME = 'category';

  public static function addsubcategory($catid, $subname){
      global $realestatedb;
      $getrecords = "INSERT INTO subcategory(catid, subcategoryname) values ($catid, '$subname') ";
      $realestatedb->prepare($getrecords);
      $realestatedb->execute();
  }

  public static function getsubcategory(){
      global $realestatedb;
      $getrecords = "Select * from subcategory inner join category  on category.catid = subcategory.catid ";
      $realestatedb->prepare($getrecords);
      $realestatedb->execute();
      return $realestatedb->resultSet();
  }
  public static function getsubcategorybycatid($catid){
      global $realestatedb;
      $getrecords = "Select * from subcategory where catid = $catid ";
      $realestatedb->prepare($getrecords);
      $realestatedb->execute();
      return $realestatedb->resultSet();
  }

}
