<?php

class User extends tableDataObject{


    const TABLENAME = 'users';


    public static function encryptPassword($value){

        $password = md5($value);
        return $password;
    }

    public static  function getUsers(){
        global $realestatedb;
        $getrecords = "select * from users";

         $realestatedb->prepare($getrecords);
         $realestatedb->execute();
         return $realestatedb->resultSet();
    }

    public static function checkUserExist($email){
    global $realestatedb;
		$getusercount = "select count(*) as usercount from users where email  = '$email'  ";
		$count = $realestatedb->prepare($getusercount);
		$usercount = $realestatedb->fetchColumn();
		return $usercount;
	  }

    public static function getUserBasicid($uid){
    global $realestatedb;
    $getusercount = "select basicinformation.basicid from basicinformation inner join users
    on basicinformation.uid = users.uid  where users.uid  = $uid  ";
    $basicid = $realestatedb->prepare($getusercount);
    $basicid = $realestatedb->fetchColumn();
    return $basicid;
    }

    public static function login_user($email, $password){
       global $realestatedb;
        $password  = self::encryptPassword($password);
        $getusercount = "select count(*) as count from users  where (email  = '$email'  and password = '$password')
         and accesslevel = '2' ";
        $count = $realestatedb->prepare($getusercount);
        $usercount = $realestatedb->fetchColumn();
        return $usercount;
     }


    public static function login_user_object($email){
       global $realestatedb;
        $getuser = "select * from users  where email = '$email' and accesslevel = '2'  ";
        $realestatedb->prepare($getuser);
        return $realestatedb->singleRecord();
     }

}

?>
