<?php

class Pages extends Controller{


   public function index(){
    $this->view( 'pages/index');
	}

	public function pickform(){
	  $this->view('pages/pickform');	
	}

	public function drugform(){
	  $this->view('pages/drugform');	
	}

	public function formwizard(){
	  $this->view('pages/formwizard');	
	}

	public function logout(){
	  $uid = $_SESSION['uid'];

    if(isset($uid)){
	  session_unset($uid);
    }
	  header('Location:'.URLROOT.'/backoffice/pages');
	}



}



?>
