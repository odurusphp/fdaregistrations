<?php

class HomeServicesData extends tableDataObject{


    const TABLENAME = 'homeservices';

    public static  function getHomeServices(){
        global $realestatedb;
        $getrecords = "select * from homeservices";
    
        $realestatedb->prepare($getrecords);
        $realestatedb->execute();
        return $realestatedb->resultSet();
    }


}

?>