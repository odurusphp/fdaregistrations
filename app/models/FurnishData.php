<?php

class FurnishData extends tableDataObject{


    const TABLENAME = 'furnishingcost';

    public static  function getItems(){
        global $fdadb;
        $getrecords = "select * from  furnishingcost";
    
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->resultSet();
    }


}

?>