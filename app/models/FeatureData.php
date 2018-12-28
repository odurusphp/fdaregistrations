<?php

class FeatureData extends tableDataObject{


    const TABLENAME = 'features';

    public static  function getfeatures(){
        global $fdadb;
        $getrecords = "select * from features";
    
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->resultSet();
    }


}

?>