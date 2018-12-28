<?php

class Subscription extends tableDataObject{


    const TABLENAME = 'subscriptions';


    public static  function getSubscriptions(){
        global $realestatedb;
        $getrecords = "select * from subscriptions";
    
        $realestatedb->prepare($getrecords);
        $realestatedb->execute();
        return $realestatedb->resultSet();
    }

    // public static function checkUserExist($email){
    //     global $realestatedb;
	// 	$getusercount = "select count(*) as usercount from users where email  = '$email'  ";
	// 	$count = $realestatedb->prepare($getusercount);
	// 	$usercount = $realestatedb->fetchColumn();
	// 	return $usercount;
	// }

}

?>