<?php

class FurnishData extends tableDataObject{


    const TABLENAME = 'furnishingcost';

    public static  function getItems(){
        global $realestatedb;
        $getrecords = "select * from  furnishingcost";
    
        $realestatedb->prepare($getrecords);
        $realestatedb->execute();
        return $realestatedb->resultSet();
    }


}

?>