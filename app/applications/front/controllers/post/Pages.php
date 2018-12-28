<?php
/**
 * Created by PhpStorm.
 * User: cassie
 * Date: 8/1/18
 * Time: 10:49 AM
 */

class Pages extends PostController {

    
    public function dispatch()
    {
        if (!isset($this->loggedInUser)) {
            throw new frameworkError("Error: attempt to dispatch with no \$loggedInUser");
        } else {
            $adminroles = ['Administrator', 'Super Administrator','My Mentor'];
            
            if ($this->loggedInUser->hasRole($adminroles)) {
                Redirecting::location('ldb/data/dashboard');
                exit();
            }
           else if($this->loggedInUser->hasRole('Regular')){
                Redirecting::location('backoffice/pages/applicant');
                exit();
            }
            elseif($this->loggedInUser->hasRole('Food')){
                Redirecting::location('backoffice/pages/');
                exit();
            }
            elseif($this->loggedInUser->hasRole('Drug')){
                Redirecting::location('backoffice/pages/');
                exit();
            }
        }
        throw new frameworkError("Unknown error in pages dispatcher");
    }

    public function signup()
    {

        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        $post = ["email" => $email, "password" => $password];
        $error = '';
        $userdata = new User();
        if (strlen($password) < 6) {
            $error = "Password too short \n";
        } else if ($userdata::checkUserExist($email) > 0) {
            $error = "Email already exist ";
        }
        if ($error == '') {

            $user = &$userdata->recordObject;
            $user->email = $email;
            $user->password = md5($password);
            $user->dateregistered = date('Y-m-d H:i:s');
            $user->fullname = $fullname;
            if ($userdata->store()) {
                $userdata->addRole('Regular');
                if (!$dologin = new FrameworkSession($post)) {
                    $this->view('pages/signup', ['message' => 'An unknown error occured!']);
                } else {
                    $this->loggedInUser = $dologin->loginuser;
                    $this->dispatch();
                }
            }

        } else {
            $this->view('pages/signup', ['type' => 'danger', 'email' => $email, 'message' => $error]);

        }

    }

    public function login()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        if (!$dologin = new FrameworkSession($_POST)) {
            $this->view('pages/login', ['message' => 'An unknown error occured!']);
        } else {
            $this->loggedInUser = $dologin->loginuser;
            $this->dispatch();
        }
    }
}