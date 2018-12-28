<?php

class Contentdata extends tableDataObject{

    const TABLENAME = 'content';

     public static  function getcontentid($link){
        global $fdadb;
        $getrecords = "select contentid from content where  menulink = '$link' ";
    
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->fetchColumn();
    }


}

?>