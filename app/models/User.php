<?php

class User extends tableDataObject{


    const TABLENAME = 'users';


    public static function encryptPassword($value){

        $password = md5($value);
        return $password;
    }

    public static  function getUsers(){
        global $fdadb;
        $getrecords = "select * from users";

         $fdadb->prepare($getrecords);
         $fdadb->execute();
         return $fdadb->resultSet();
    }

    public static function checkUserExist($email){
    global $fdadb;
		$getusercount = "select count(*) as usercount from users where email  = '$email'  ";
		$count = $fdadb->prepare($getusercount);
		$usercount = $fdadb->fetchColumn();
		return $usercount;
	  }

    public static function getUserBasicid($uid){
    global $fdadb;
    $getusercount = "select basicinformation.basicid from basicinformation inner join users
    on basicinformation.uid = users.uid  where users.uid  = $uid  ";
    $basicid = $fdadb->prepare($getusercount);
    $basicid = $fdadb->fetchColumn();
    return $basicid;
    }

    public static function login_user($email, $password){
       global $fdadb;
        $password  = self::encryptPassword($password);
        $getusercount = "select count(*) as count from users  where (email  = '$email'  and password = '$password')
         and accesslevel = '2' ";
        $count = $fdadb->prepare($getusercount);
        $usercount = $fdadb->fetchColumn();
        return $usercount;
     }


    public static function login_user_object($email){
       global $fdadb;
        $getuser = "select * from users  where email = '$email' and accesslevel = '2'  ";
        $fdadb->prepare($getuser);
        return $fdadb->singleRecord();
     }

}

?>
