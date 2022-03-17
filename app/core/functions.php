<?php

function show($stuff){
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

function esc($str){
    return addslashes($str);
}

function get_random_string_max($length){
    $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u');
    $text = "";

    $length = rand(4, $length);

    for($i = 0; $i < $length; $i++){
        $random = rand(0,30);
        $text .= $array[$random];
    }
    return $text;
}