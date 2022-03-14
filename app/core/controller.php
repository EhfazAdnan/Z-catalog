<?php
class Controller {
    public function view($view, $data = []){
        if(file_exists("../app/views/" . $view . ".php")){
            include "../app/views/" . $view . ".php";
        }
    }
}