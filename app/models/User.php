<?php

class User extends BaseUser{


    public static function encryptPassword($value){

        $password = md5($value);
        return $password;
    }
    public static function getUserByParam($param, $searchvalue)
    {
        $rowbyparam = parent::getRecordByParams(self::TABLENAME, array($param => $searchvalue));

        if ((!$rowbyparam) || count($rowbyparam) !== 1) {
            return false;
        } else {
            $userbyparam = new User($rowbyparam->uid);
            return $userbyparam;
        }

    }
    public static function getUsers($role){
    
            global $fdadb;
            $getuser = "select users.*, roles.role from users join
            user_roles on uid = users_uid join
            roles on roleid = roles_roleid where role = '$role'";
            $fdadb->prepare($getuser);
            return $fdadb->resultSet();
        }

        public static function countUsers($role){
    
            global $fdadb;
            $getuser = "select count(*) as total from users join
            user_roles on uid = users_uid join
            roles on roleid = roles_roleid where role = '$role'";
            $fdadb->prepare($getuser);
            return $fdadb->fetchColumn();
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
     public static function getuserbyemail($email){
        global $fdadb;
        $getrecords = "SELECT users.* from users where users.email = '$email' ";
        $fdadb->prepare($getrecords);
        $fdadb->execute();
        return $fdadb->singleRecord();
    }
}

?>
