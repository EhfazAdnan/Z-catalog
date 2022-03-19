<?php

Class Login extends Controller{

    public function index(){
       $data['page_title'] = "Login";

       if(isset($_POST['email'])){
           $model = $this->loadModel("user");
           $model->login($_POST);
       }
       $this->view("catalog/login", $data);
    }

}