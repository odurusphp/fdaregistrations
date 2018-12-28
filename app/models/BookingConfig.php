<?php

class BookingConfig extends tableDataObject{


    const TABLENAME = 'bookconfig';

    public static  function getbooking(){
        global $fdadb;
        $getrecords = "select * from bookconfig";
    
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->resultSet();
    }


}

?>