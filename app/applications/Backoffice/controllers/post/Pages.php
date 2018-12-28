<?php
class Pages extends PostController {

      public function index(){

         if(isset($_POST['login'])){

           $email = $_POST['email'];
           $password = $_POST['password'];
           $ucount = User::login_user($email, $password);
           if($ucount > 0){
             $userobject = User::login_user_object($email);
             $uid =  $userobject->uid;
             $_SESSION['uid'] = $uid;
             header('Location:'.URLROOT.'/backoffice/pages/dashboard');
           }else{
             $message = ['message'=> 'Bad username or passowrd'];
              $this->view( 'pages/index', $message);
           }
       }
     }

     public function adduser(){

       if(isset($_POST['adduser'])){

   			$usercount = User::checkUserExist($_POST['email']);

   			if($usercount == 0){
         $userdata = new User();
         $datarow =&  $userdata->recordObject;
         $datarow->username = $_POST['email'];
         $datarow->email = $_POST['email'];
         $datarow->lastname = $_POST['lastname'];
         $datarow->firstname =  $_POST['firstname'];
         $datarow->role =  $_POST['role'];
   		   $datarow->password = User::encryptPassword($_POST['password']);
         $datarow->datecreated = date('Y-m-d');
   			 $userdata->store();

   			 $alluserdata =  User::listAll();
   			 $dataresponse  = ['customerdata'=>$alluserdata, 'response'=>'User successfully addded', 'class'=>'aler alert-success'];
   			 $this->view( 'pages/adduser', $dataresponse);

   			}else{
   				$alluserdata =  User::listAll();
   				$dataresponse  = ['customerdata'=>$alluserdata, 'response'=>'Error adding User. Email may exist already',
   				'class'=>'alert alert-danger'];
   				$this->view( 'pages/adduser', $dataresponse );
   			}
   		}
    }


    public function editusers($userid){
      if(isset($_POST['updateuser'])){
      $u = new User($userid);
      $datarow =&  $u->recordObject;
      $datarow->username = $_POST['email'];
      $datarow->email = $_POST['email'];
      $datarow->lastname = $_POST['lastname'];
      $datarow->firstname =  $_POST['firstname'];
      $datarow->role =  $_POST['role'];
      $datarow->password = User::encryptPassword($_POST['password']);
      $u->store();

      $u = new User($userid);
  		$userdata = $u->recordObject;
  		$alluserdata =  User::getUsers();
  		$data = ['alluserdata'=>$alluserdata, 'user'=> $userdata];

      $this->view( 'pages/editusers', $data);
        }
    }


    public function category(){

      if(isset($_POST['addcategory'])){
      $u = new Category();
      $datarow =&  $u->recordObject;
      $datarow->categoryname = $_POST['categoryname'];
      $datarow->uid = $_SESSION['uid'];
      $u->store();
      $catdata =  Category::listAll();
      $data = ['catdata'=>$catdata];
      $this->view( 'pages/category', $data);
      }

    }

    public function subcategory(){

      if(isset($_POST['addsubcategory'])){
      $catid = $_POST['catid'];
      $subcategoryname = $_POST['subcategoryname'];
      Category::addsubcategory($catid, $subcategoryname);
      $catdata =  Category::listAll();
      $subdata  = Category::getsubcategory();
      $data = ['catdata'=>$catdata, 'subdata'=>$subdata];
      $this->view( 'pages/subcategory', $data);
      }

    }


    public function subcategorydata(){
        $catid = $_POST['catid'];
        $data = Category::getsubcategorybycatid($catid);
        $data =  json_encode ($data);
        print_r($data);
    }

    public function productlisting(){

      if(isset($_POST['addproduct'])){

        $pro = new Products();
        $pro->recordObject->catid = $_POST['category'];
        $pro->recordObject->productname = $_POST['productname'];
        $pro->recordObject->subcategory = $_POST['subcategory'];
        $pro->recordObject->dimensions = $_POST['dimension'];
        $pro->recordObject->price = $_POST['price'];
        $pro->recordObject->quantity = $_POST['quantity'];
        $pro->recordObject->productdate = date('Y-m-d H:i:s');
        $pro->recordObject->uid = $_SESSION['uid'];
        $pro->store();

        $productdata =  Products::listproducts();
        $catdata = Category::listAll();
        $data = ['productdata'=>$productdata, 'catdata'=>$catdata];
        $this->view('pages/productlisting', $data);
      }

    }

    public function dimension(){
        $productid = $_POST['productid'];
        $dimension = $_POST['dimension'];
        $data = ['productid'=>$productid, 'dimension'=>$dimension];
        $this->view('pages/dimension', $data);
    }

    public function saveproductpictures($productid){

        $filedata = $_FILES['Filedata'];

         $filedoc = $_POST['filedoc'];
         $uploads = new Uploads();
         $uploads->filename = $_FILES['Filedata'];
         $uploadresponse = $uploads->upLoadFile($filedoc);

         $docname = $uploadresponse['filename'];
         $size = $_FILES['Filedata']['size'];
         $type = $_FILES['Filedata']['type'];
         $name = $_FILES['Filedata']['name'];
         $docdate = date('Y-m-d');

         $docdata = new Documents();
         $doc =&   $docdata->recordObject;
         $doc->originalname = $name;
         $doc->filename = $docname;
         $doc->type = $type;
         $doc->size = $size;
         $doc->docdate = $docdate;
         $doc->productid = $productid;
         $docdata->store();


    }

    public function savedescription(){

      $productid = $_POST['productid'];
      $pro = new Products($productid);
      $pro->recordObject->description = $_POST['description'];
      $pro->store();


    }


}
