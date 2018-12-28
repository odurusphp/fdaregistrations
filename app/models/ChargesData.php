<?php

class ChargesData extends tableDataObject{


    const TABLENAME = 'taxes';

    public static  function getCharges(){
        global $realestatedb;
        $getrecords = "select * from taxes";
    
        $realestatedb->prepare($getrecords);
        $realestatedb->execute();
        return $realestatedb->resultSet();
    }


}

?>