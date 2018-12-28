<?php

class Content extends Controller{

  public function index(){
	 $content  = Contentdata::ListAll();
	 $contentdata = ['content'=>$content];
   $this->view('content/content', $contentdata);

	}

	public function about(){
	 $aboutid = Contentdata::getcontentid('about');
   $visionid = Contentdata::getcontentid('vision');
   $missionid = Contentdata::getcontentid('mission');
   $valuesid = Contentdata::getcontentid('values');

   $ab  = new Contentdata($aboutid);
   $aboutus  = $ab->recordObject->content;
   $vs  = new Contentdata($visionid);
   $vision  = $vs->recordObject->content;
   $ms  = new Contentdata($missionid);
   $mission  = $ms->recordObject->content;
   $va  = new Contentdata($valuesid);
   $values  = $va->recordObject->content;



   if(isset($_POST['saveaboutus'])){
    $ab->recordObject->content=$_POST['content'];
    $ab->store();
    $contentdata = ['aboutus'=>$_POST['content'], 'mission'=>$mission, 'vision'=>$vision, 'values'=>$values];
    $this->view('content/about', $contentdata);

   }

   if(isset($_POST['savemission'])){
     $ms->recordObject->content=$_POST['content'];
     $ms->store();
     $contentdata = ['aboutus'=>$aboutus, 'mission'=>$_POST['content'], 'vision'=>$vision, 'values'=>$values];
     $this->view('content/about', $contentdata);
   }

   if(isset($_POST['savevalues'])){
     $va->recordObject->content=$_POST['content'];
     $va->store();
     $contentdata = ['aboutus'=>$aboutus, 'mission'=>$mission, 'vision'=>$vision, 'values'=>$_POST['content']];
     $this->view('content/about', $contentdata);
   }

   if(isset($_POST['savevision'])){
     $vs->recordObject->content=$_POST['content'];
     $vs->store();
     $contentdata = ['aboutus'=>$aboutus, 'mission'=>$mission, 'vision'=>$_POST['content'], 'values'=>$values];
     $this->view('content/about', $contentdata);
   }else{
     $contentdata = ['aboutus'=>$aboutus, 'mission'=>$mission, 'vision'=>$vision, 'values'=>$values];
     $this->view('content/about', $contentdata);
   }



	}

	public function homeservices(){
    $contentid = Contentdata::getcontentid('homeservices');
    $con  = new Contentdata($contentid);

	   if(isset($_POST['saveservices'])){

	   $uploads = new Uploads();
     $picfile = $_FILES['picture'];
     $name = $picfile['name'];
     if($name != ''){
     $oldfilename =$con->recordObject->picture;
     $uploads->removeFile($oldfilename);
		 $uploads->filename = $_FILES['picture'];
		 $filename = $uploads->upLoadFile();
      }


	     $content = $_POST['content'];
	     $con->recordObject->content = $_POST['content'];
	     if(isset($filename) != ''){
	     $con->recordObject->picture = $filename;

      }else{
       $filename = $con->recordObject->picture;
      }
	     $con->store();
       $data =  ['content'=>$content, 'picture'=>$filename];
		   $this->view('content/homeservices', $data);
	    }else{
	         $content = $con->recordObject->content;
	         $picture = $con->recordObject->picture;
           $data =  ['content'=>$content, 'picture'=>$picture];
	    	   $this->view('content/homeservices', $data);
	    }


	}

	public function homefurnishing(){
    $contentid = Contentdata::getcontentid('homefurnishing');
    $con  = new Contentdata($contentid);

	   if(isset($_POST['savefurnishing'])){

	   $uploads = new Uploads();
     $picfile = $_FILES['picture'];
     $name = $picfile['name'];
     if($name != ''){
     $oldfilename =$con->recordObject->picture;
     $uploads->removeFile($oldfilename);
		 $uploads->filename = $_FILES['picture'];
		 $filename = $uploads->upLoadFile();
      }
	     $content = $_POST['content'];
	     $con->recordObject->content = $_POST['content'];
	     if(isset($filename) != ''){
	     $con->recordObject->picture = $filename;

      }else{
       $filename = $con->recordObject->picture;
      }
	     $con->store();
       $data =  ['content'=>$content, 'picture'=>$filename];
		   $this->view('content/homefurnishing', $data);
	    }else{
	         $content = $con->recordObject->content;
	         $picture = $con->recordObject->picture;
           $data =  ['content'=>$content, 'picture'=>$picture];
	    	   $this->view('content/homefurnishing', $data);
	    }
	}

	public function homerentals(){
    $contentid = Contentdata::getcontentid('homerentals');
    $con  = new Contentdata($contentid);

	   if(isset($_POST['saverentals'])){
	   $uploads = new Uploads();
     $picfile = $_FILES['picture'];
     $name = $picfile['name'];
     if($name != ''){
     $oldfilename =$con->recordObject->picture;
     $uploads->removeFile($oldfilename);
		 $uploads->filename = $_FILES['picture'];
		 $filename = $uploads->upLoadFile();
      }
	     $content = $_POST['content'];
	     $con->recordObject->content = $_POST['content'];
	     if(isset($filename) != ''){
	     $con->recordObject->picture = $filename;

      }else{
       $filename = $con->recordObject->picture;
      }
	     $con->store();
       $data =  ['content'=>$content, 'picture'=>$filename];
		   $this->view('content/homerentals', $data);
	    }else{
	         $content = $con->recordObject->content;
	         $picture = $con->recordObject->picture;
           $data =  ['content'=>$content, 'picture'=>$picture];
	    	   $this->view('content/homerentals', $data);
	    }
	}

	public function board(){
   $contentid = Contentdata::getcontentid('board');
   $con  = new Contentdata($contentid);
	   if(isset($_POST['saveboard'])){
	     $content = $_POST['content'];
	     $con->recordObject->content = $_POST['content'];
	     $con->store();
       $data =  ['content'=>$content];
		   $this->view('content/board', $data);
	    }else{
	      $content = $con->recordObject->content;
        $data =  ['content'=>$content];
	    	$this->view('content/board', $data);
	    }
	}
	public function termsrental(){

    $contentid = Contentdata::getcontentid('termsrental');
    $con  = new Contentdata($contentid);
 	   if(isset($_POST['submitterms'])){
 	     $content = $_POST['content'];
 	     $con->recordObject->content = $_POST['content'];
 	     $con->store();
        $data =  ['content'=>$content];
 		   $this->view('content/termsrental', $data);
 	    }else{
 	      $content = $con->recordObject->content;
         $data =  ['content'=>$content];
 	    	$this->view('content/termsrental', $data);
 	    }
  }

  public function termsagents(){

    $contentid = Contentdata::getcontentid('termsagents');
    $con  = new Contentdata($contentid);
 	   if(isset($_POST['submitterms'])){
 	     $content = $_POST['content'];
 	     $con->recordObject->content = $_POST['content'];
 	     $con->store();
        $data =  ['content'=>$content];
 		   $this->view('content/termsagents', $data);
 	    }else{
 	      $content = $con->recordObject->content;
         $data =  ['content'=>$content];
 	    	$this->view('content/termsagents', $data);
 	    }
  }

  public function termshomeowners(){

    $contentid = Contentdata::getcontentid('termshomeowners');
    $con  = new Contentdata($contentid);
 	   if(isset($_POST['submitterms'])){
 	     $content = $_POST['content'];
 	     $con->recordObject->content = $_POST['content'];
 	     $con->store();
        $data =  ['content'=>$content];
 		   $this->view('content/termshomeowners', $data);
 	    }else{
 	      $content = $con->recordObject->content;
         $data =  ['content'=>$content];
 	    	$this->view('content/termshomeowners', $data);
 	    }
  }

  public function termsdevelopers(){

    $contentid = Contentdata::getcontentid('termsdevelopers');
    $con  = new Contentdata($contentid);
 	   if(isset($_POST['submitterms'])){
 	     $content = $_POST['content'];
 	     $con->recordObject->content = $_POST['content'];
 	     $con->store();
        $data =  ['content'=>$content];
 		   $this->view('content/termsdevelopers', $data);
 	    }else{
 	      $content = $con->recordObject->content;
         $data =  ['content'=>$content];
 	    	$this->view('content/termsdevelopers', $data);
 	    }
  }

  public function termsgeneral(){

    $contentid = Contentdata::getcontentid('termsgeneral');
    $con  = new Contentdata($contentid);
     if(isset($_POST['submitterms'])){
       $content = $_POST['content'];
       $con->recordObject->content = $_POST['content'];
       $con->store();
        $data =  ['content'=>$content];
       $this->view('content/termsgeneral', $data);
      }else{
        $content = $con->recordObject->content;
         $data =  ['content'=>$content];
        $this->view('content/termsgeneral', $data);
      }
  }

  public function termsguidelines(){

    $contentid = Contentdata::getcontentid('termsguidelines');
    $con  = new Contentdata($contentid);
     if(isset($_POST['submitterms'])){
       $content = $_POST['content'];
       $con->recordObject->content = $_POST['content'];
       $con->store();
       $data =  ['content'=>$content];
       $this->view('content/termsguidelines', $data);
      }else{
        $content = $con->recordObject->content;
        $data =  ['content'=>$content];
        $this->view('content/termsguidelines', $data);
      }
  }


}




?>
