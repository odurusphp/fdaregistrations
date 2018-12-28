<?php

class Subscription extends tableDataObject{


    const TABLENAME = 'subscriptions';


    public static  function getSubscriptions(){
        global $fdadb;
        $getrecords = "select * from subscriptions";
    
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->resultSet();
    }

    // public static function checkUserExist($email){
    //     global $fdadb;
	// 	$getusercount = "select count(*) as usercount from users where email  = '$email'  ";
	// 	$count = $fdadb->prepare($getusercount);
	// 	$usercount = $fdadb->fetchColumn();
	// 	return $usercount;
	// }

}

?>