<?php

class Booking extends Controller{

   const TABLENAME = 'bookings';

  public static function getBooking(){
      global $fdadb;
      $getrecords = "select users.*,  bookings.* from bookings inner join users  on
      bookings.uid  = users.uid";

      $fdadb->prepare($getrecords);
      $fdadb->execute();
      return $fdadb->resultSet();
  }

  public static function getBookingbyId($bookingid){
      global $fdadb;
      $getrecords = "select * from bookings where bookingid = $bookingid";
      $fdadb->prepare($getrecords);
      $fdadb->execute();
      return $fdadb->singleRecord();
  }

  public static function getallbooking(){
      global $fdadb;
      $getrecords = "select  basicinformation.firstname,
      basicinformation.lastname, basicinformation.phone, basicinformation.email,
      bookings.* from bookings left join basicinformation  on
      bookings.uid  = basicinformation.uid  ";

      $fdadb->prepare($getrecords);
      $fdadb->execute();
      return $fdadb->resultSet();
  }



}



 ?>
