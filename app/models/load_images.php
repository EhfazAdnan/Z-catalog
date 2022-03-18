<?php

Class Load_images{
    public function get_images($find = ''){
        $DB = new Database();

        $limit = 1;
        $page_number = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $page_number = $page_number < 1 ? 1 : $page_number;

        $offset = ($page_number - 1) * $limit;

        if($find == ''){
            $query = "select * from images order by id desc limit $limit offset $offset";
            return $DB->read($query);
        }else{
            $find = esc($find);
            $query = "select * from images where title like '%$find%' order by id desc limit 12";
            return $DB->read($query);
        }
        
    }
}