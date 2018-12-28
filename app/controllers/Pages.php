<?php
/**
 * Created by PhpStorm.
 * User: astro
 * Date: 30-Mar-18
 * Time: 18:47
 */

class Pages extends Controller {


    public function index(){
        header("Location: /front/pages/home");
    }
   
    public function login( $message=null ){
        $this->view('pages/login');
    }
}