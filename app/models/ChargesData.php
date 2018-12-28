<?php

class ChargesData extends tableDataObject{


    const TABLENAME = 'taxes';

    public static  function getCharges(){
        global $fdadb;
        $getrecords = "select * from taxes";
    
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->resultSet();
    }


}

?>