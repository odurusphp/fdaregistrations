<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 2/23/2018
 * Time: 12:05 PM
 */

class BaseUser extends tableDataObject {
	const TABLENAME = 'users';

	// FUNCTIONS FROM THE "CONTROLLER" MISTAKENLY CREATED INSTEAD OF AN OBJECT FOR ROLE CONCEPTS
	// -------------------------------------------------------------------------------------------
    /**
     * @return array
     * @throws frameworkError
     */
    public function listRoles(){
		global $lehrerdb;

		$thisuid = $this->recordObject->uid;

		$getroles = "select role from users
				join user_roles on users.uid = user_roles.users_uid
			    join roles on user_roles.roles_roleid = roles.roleid
			    where uid = $thisuid";
		$lehrerdb->prepare($getroles);
		$roles = $lehrerdb->resultSet(true);
		foreach($roles as $role){
			$rolesout[] = $role['role'];
		}
		return $rolesout;
	}

    /**
     * @param $role
     *
     * @return bool
     * @throws frameworkError
     */
    public function hasRole($role){
		global $lehrerdb;

		$thisuid = $this->recordObject->uid;

		$getrole = "select role from users
				join user_roles on users.uid = user_roles.users_uid
			    join roles on user_roles.roles_roleid = roles.roleid
			    where uid = $thisuid ";

		// accept array of multiple roles to check from
		if(is_array($role)){
			$roles = "('" . implode("','",$role) . "')";
			$getrole .= " and role in $roles";
		} else {
			$getrole .= " and role='$role'";
		}
		$lehrerdb->prepare($getrole);
		if(count($lehrerdb->resultSet()) >0){
			return true;
		} else {
			return false;
		}
	}

    /**
     * @param $role
     *
     * @return mixed
     * @throws frameworkError
     */
    public function roletype($role){
		global $lehrerdb;
		$getuserrole = "Select roleid from roles where role = '$role' ";
		$rl = $lehrerdb->prepare($getuserrole);
		$role = $lehrerdb->fetchColumn();
		return $role;
	}

    /**
     * @param $roletype
     *
     * @throws frameworkError
     */
    public function addRole($roletype){
		global $lehrerdb;
		$uid = $this->recordObject->uid;
		$roleid = $this->roletype($roletype);
		$query = "INSERT INTO  user_roles  (users_uid, roles_roleid) values ($uid , $roleid) ";
		$lehrerdb->prepare($query);
		$lehrerdb->execute();
	}


    /**
     * @param $roletype
     *
     * @throws frameworkError
     */
    public function removeRole($roletype){
		global $lehrerdb;
		$uid = $this->recordObject->uid;
		$roleid = $this->roletype($roletype);
		$query = "DELETE from user_roles where users_uid = $uid and roles_roleid = $roleid ";
		$lehrerdb->prepare($query);
		$lehrerdb->execute();
	}

    /**
     * @param $role
     *
     * @return mixed
     * @throws frameworkError
     */
    public static function getUsersWithRole($role){
		global $lehrerdb;

		$getUqry = "select users.*, roles.role from users join
					user_roles on uid = users_uid join
					roles on roleid = roles_roleid where role = '$role'
					and uid not in (
					  select users_uid from user_roles join roles on roles_roleid = roleid
					    where role = 'deleted'
					) order by uid";
		$lehrerdb->prepare($getUqry);
		return $lehrerdb->resultSet();
	}
}
