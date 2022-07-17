<?php
//views kısmında kullanılan fonksiyonlar
function site_url($url = false){
    return URL . '/' . $url ;
}

function public_url($url = false){
    return URL . '/public/' . $url;
}


function picture_path($url = false,$which){
    if ($which == "accident_pic"){
        return $_SERVER['DOCUMENT_ROOT'] . '/public/pictures/accident_pic/' . $url;
    }
    if ($which == "vergi_pic"){
        return $_SERVER['DOCUMENT_ROOT'] . '/public/pictures/verge_pic/' . $url;
    }
}
function public_urls($url = false){
    return URL . '/public/customer/' . $url;

}

function error(){
    global $error;
    return isset($error) ? $error : false;
}
function success(){
    global $success;
    return isset($success) ? $success : false;
}

function damp($string){
    if (gettype($string) == "array"){
        print_r($string);
        exit();

    }else{
        echo $string;
        exit();
    }
}


