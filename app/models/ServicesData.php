<?php

class ServicesData extends tableDataObject{


    const TABLENAME = 'services';

    public static  function getServices(){
        global $fdadb;
        $getrecords = "select * from services";
    
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->resultSet();
    }


}

?>