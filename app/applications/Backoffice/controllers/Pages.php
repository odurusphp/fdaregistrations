<?php

class Pages extends Controller{


   public function index(){
   
    $this->view( 'pages/index');
	}

	public function pickform(){
       
       $uid = $this->loggedInUser->recordObject->uid;
       $buscount = Business::getExistingUserBusiness($uid);
       redirectToBusinessForms($buscount);
        
	   $drugdata = Applications::getapplications('drug');
	   $fooddata = Applications::getapplications('food');

	   $data = ['drugdata'=>$drugdata, 'fooddata'=>$fooddata];
	   $this->view('pages/pickform', $data);	
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
