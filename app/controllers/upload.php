<?php

Class Upload extends Controller{

    public function index(){
       
    }

    public function image(){
        $data['page_title'] = "Upload Image";

        // check if logged in
        $user = $this->loadModel("user");
        if(!$result = $user->is_looged_in()){
            header("Location: " . ROOT . "login");
            die;
        }
 
        if(isset($_FILES['file'])){
            $model = $this->loadModel("upload_file");
            $model->upload($_POST,$_FILES);
        }

        $this->view("catalog/upload_image", $data);
    }

    public function video(){
        $data['page_title'] = "Upload Video";
        $this->view("catalog/upload_video", $data);
    }
}