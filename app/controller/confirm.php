<?php
if (get('confirm')){
    $request = request::get_request(get('confirm'));
    $province = request::get_province($request['province_id'])['isim'];
    $plate = request::get_car($request['car_id'])['plaka'];
    $pic = request::get_pic($request['pic_id'])['file_name'];
    $pic = json_decode($pic,true);
    if (get('secret') == $request['secret_token']){
        require view('confirm');
    }else{
        require view("mainPage");
    }
}










