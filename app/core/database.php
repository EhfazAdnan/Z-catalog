<?php

Class Database {

    public function db_connect(){

        try{

           $string = "mysql:host=localhost;dbname=catalog_db;";
           return $db = new PDO($string, 'root', '');

        }catch(PDOException $e){

           die($e->getMessage());

        }

    }

    public function read($query, $data = []){

    }

    public function write($query, $data = []){
        $DB = $this->db_connect();

        if(count($data) > 0){
            $stm = $DB->prepare($query);
            $check = $stm->execute($data);
        }else{
            $check = $DB->query($data);
        }

        if($check){
            return true;
        }else{
            return false;
        }
    }

}