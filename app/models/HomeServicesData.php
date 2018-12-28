<?php

class HomeServicesData extends tableDataObject{


    const TABLENAME = 'homeservices';

    public static  function getHomeServices(){
        global $fdadb;
        $getrecords = "select * from homeservices";
    
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->resultSet();
    }


}

?>