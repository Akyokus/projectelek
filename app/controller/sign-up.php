<?php

if (post('submit')){
    $res = user::add_user(post("uname"),post("surname"),post('tel'),post("password"),post("email"));
    echo $res;
}


require view("signup");