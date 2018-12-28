<?php

class Booking extends Controller{

   const TABLENAME = 'bookings';

  public static function getBooking(){
      global $realestatedb;
      $getrecords = "select users.*,  bookings.* from bookings inner join users  on
      bookings.uid  = users.uid";

      $realestatedb->prepare($getrecords);
      $realestatedb->execute();
      return $realestatedb->resultSet();
  }

  public static function getBookingbyId($bookingid){
      global $realestatedb;
      $getrecords = "select * from bookings where bookingid = $bookingid";
      $realestatedb->prepare($getrecords);
      $realestatedb->execute();
      return $realestatedb->singleRecord();
  }

  public static function getallbooking(){
      global $realestatedb;
      $getrecords = "select  basicinformation.firstname,
      basicinformation.lastname, basicinformation.phone, basicinformation.email,
      bookings.* from bookings left join basicinformation  on
      bookings.uid  = basicinformation.uid  ";

      $realestatedb->prepare($getrecords);
      $realestatedb->execute();
      return $realestatedb->resultSet();
  }



}



 ?>
