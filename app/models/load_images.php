<?php

Class Load_images{
    public function get_images($find = ''){
        $DB = new Database();

        if($find == ''){
            $query = "select * from images order by id desc limit 12";
            return $DB->read($query);
        }else{
            $find = esc($find);
            $query = "select * from images where title like '%$find%' order by id desc limit 12";
            return $DB->read($query);
        }
        
    }
}