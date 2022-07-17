<?php

if (post('submit')){
    $res = user::login(post('mail'),post('password'));
    if ($res){
        header("Location:".site_url('index'));
    }
}

