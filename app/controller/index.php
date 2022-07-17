<?php

//$res = user::add_user("Mehmet","AKYOKUŞ","05525871269","asdasd","mehmet@dasdas.com");
//$res = user::login("mehmet@dasdas.com","nazliiiii");
//file_upload::files_upload($_FILES['pic'],"accident_pic");
//$res = user::change_password("nazliiiii","gıyuguı");
//print_r($res);
$services = services::get_services();
require view('index');
