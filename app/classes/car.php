<?php


class car
{
    public static function add_car($data){  //get user_id from session
        global $db;
        $query = $db->prepare("INSERT INTO cars SET user_id=:user_id,car_year=:car_year,brand_id=:brand_id,modal_id=:modal_id,plaka=:plaka,total_km=:total_km,motor_power=:motor_power,fuel_type=:fuel_type");
        $response = $query->execute($data);
        if ($response){
            $message['suc'] = "Aracınız başarıyla garajınıza eklenmiştir.";
        }else{
            $message['err'] = "Aracınız garajınıza gelirken kaza yaptı. Lütfen teknik ekibimize başvurunuz.";
        }
        return $message;
    }
    public static function get_car(){
        global $db;
        $query = $db->prepare("SELECT * FROM cars WHERE user_id=:user_id");
        $query ->execute([
            'user_id' => session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_car_id($id){
        global $db;
        $query = $db->prepare("SELECT * FROM cars WHERE id=:id");
        $query ->execute([
            'id' => $id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_car_brand($brand_id){
        global $db;
        $query = $db->prepare("SELECT * FROM car_brands WHERE id=:id");
        $query ->execute([
            'id' => $brand_id
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_brands(){
        global $db;
        $query = $db->prepare("SELECT * FROM car_brands");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function add_problem($prob){
        global $db;
        $query = $db->prepare("INSERT INTO services SET sname=:sname  ");
        $query->execute([
            'sname' => $prob
        ]);
    }



}