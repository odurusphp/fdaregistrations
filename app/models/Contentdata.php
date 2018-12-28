<?php

class Contentdata extends tableDataObject{

    const TABLENAME = 'content';

     public static  function getcontentid($link){
        global $realestatedb;
        $getrecords = "select contentid from content where  menulink = '$link' ";
    
        $realestatedb->prepare($getrecords);
        $realestatedb->execute();
        return $realestatedb->fetchColumn();
    }


}

?>