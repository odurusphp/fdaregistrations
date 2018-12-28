<?php

class Category extends tableDataObject{

  const TABLENAME = 'category';

  public static function addsubcategory($catid, $subname){
      global $fdadb;
      $getrecords = "INSERT INTO subcategory(catid, subcategoryname) values ($catid, '$subname') ";
      $fdadb->prepare($getrecords);
      $fdadb->execute();
  }

  public static function getsubcategory(){
      global $fdadb;
      $getrecords = "Select * from subcategory inner join category  on category.catid = subcategory.catid ";
      $fdadb->prepare($getrecords);
      $fdadb->execute();
      return $fdadb->resultSet();
  }
  public static function getsubcategorybycatid($catid){
      global $fdadb;
      $getrecords = "Select * from subcategory where catid = $catid ";
      $fdadb->prepare($getrecords);
      $fdadb->execute();
      return $fdadb->resultSet();
  }

}
