<?php

Class Home extends Controller{

    public function index(){
       $data['page_title'] = "Photos";

       $load_class = $this->loadModel("load_images");

       $find = isset($_GET['find']) ? $_GET['find'] : "";

       $data['images'] = $load_class->get_images($find);

       $image_class = $this->loadModel("image_class");

       if(is_array($data['images'])){
        foreach($data['images'] as $key => $row){
            $data['images'][$key]->image = $image_class->get_thumbnail($row->image);
        }
       }

       $this->view("catalog/index", $data);
    }

}