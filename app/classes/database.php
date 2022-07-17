<?php


class database
{
public static function add_brand($data){
    global $db;
    $query = $db->prepare("INSERT INTO car_brands SET brand_name=:brand_name,img_url=:img_url");
    $response = $query->execute($data);
    if ($response){
        $message['suc'] = "Aracınız başarıyla garajınıza eklenmiştir.";
    }else{
        $message['err'] = "Aracınız garajınıza gelirken kaza yaptı. Lütfen teknik ekibimize başvurunuz.";
    }
    return $message;
}

public static function get_brands(){
    global $db;
    $query = $db->prepare("SELECT * FROM car_brands");
    $query->execute();
    $response = $query->fetchAll(PDO::FETCH_ASSOC);
    return $response;
}

public static function get_province(){
    global $db;
    $query = $db->prepare("SELECT * FROM iller");
    $query->execute();
    $response = $query->fetchAll(PDO::FETCH_ASSOC);
    return $response;
}
public static function get_district($province_id){
        global $db;
        $query = $db->prepare("SELECT * FROM ilce WHERE il_id=:il");
        $query->execute([
            'il' => $province_id
        ]);
        $response = $query->fetchAll(PDO::FETCH_ASSOC);
        return $response;
    }


}