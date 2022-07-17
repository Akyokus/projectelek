<?php


if (post('login')){
    $res = usta::login(post('email'),post('password'));
}
require usta_view("login_page");
