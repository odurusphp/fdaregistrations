<?php

class FeatureData extends tableDataObject{


    const TABLENAME = 'features';

    public static  function getfeatures(){
        global $realestatedb;
        $getrecords = "select * from features";
    
        $realestatedb->prepare($getrecords);
        $realestatedb->execute();
        return $realestatedb->resultSet();
    }


}

?>