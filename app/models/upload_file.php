<?php
Class Upload_file {
    public function upload($POST,$FILES){

        $_SESSION['error'] = "";
        
        $allowed[] = 'image/jpeg';
        $allowed[] = 'image/png';
        $allowed[] = 'video/mp4';

        // upload the file
        if($_FILES['file']['name'] != "" && $_FILES['file']['error'] == 0){
            if(in_array($_FILES['file']['type'], $allowed)){

            }else{
                $_SESSION['error'] = "Only Jpeg/png are allowed to upload";
            }
        }

        if($_SESSION['error'] == ""){

            $folder = "uploads/";
            if(!file_exists($folder)){
                mkdir($folder,0777,true);
            }

            $destination = $folder . $FILES['file']['name'];
            move_uploaded_file($FILES['file']['tmp_name'], $destination);

            $arr['title'] = esc($_POST['title']);
            $arr['date'] = date("Y-m-d H:i:s");
            $arr['userid'] = 1;
            $arr['views'] = 0;
            $arr['image'] = $destination;
            $arr['url_address'] = get_random_string_max(60);
    
            $DB = new Database();
            $query = "insert into images (title,userid,date,image,views,url_address) values (:title,:userid,:date,:image,:views,:url_address)";
            $DB->write($query, $arr);   

            header("Location: " . ROOT . "photos");
            die;
        }
    }
}