<?php


class request
{
    public static function province_request($data){   //get user_id from session. get car_id from selectbox. is pic exist get pic_id from file_upload class.
        global $db;
        $query = $db->prepare("INSERT INTO requests SET user_id=:user_id,province_id=:province_id,district_name=:district_name");
        $query->execute($data);

        return $db->lastInsertId();
    }
    public static function service_request($data){
        global $db;
        $query = $db->prepare("UPDATE requests SET service=:service WHERE id=:id");
        $res = $query->execute($data);

        return $res;
    }
    public static function car_request($data){
        global $db;
        $query = $db->prepare("UPDATE requests SET car_id=:car_id WHERE id=:id");
        return $query->execute($data);
    }
    public static function problem_request($data){
        global $db;
        $query = $db->prepare("UPDATE requests SET description=:description,pic_id=:pic_id WHERE id=:id");
        return $query->execute($data);
    }
    public static function set_token($data){
        global $db;
        $query = $db->prepare("UPDATE requests SET secret_token=:secret_token WHERE id=:id");
        return $query->execute($data);
    }
    public static function get_request($id){
        global $db;
        $query = $db->prepare("SELECT * FROM requests WHERE id=:id");
        $query->execute([
            'id' => $id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_province($province_id){
        global $db;
        $query = $db->prepare("SELECT isim FROM iller WHERE il_no=:il_no");
        $query->execute([
            'il_no' => $province_id
        ]);
        $response = $query->fetch(PDO::FETCH_ASSOC);
        return $response;
    }
    public static function get_car($car_id){
        global $db;
        $query = $db->prepare("SELECT plaka FROM cars WHERE id=:id");
        $query->execute([
            'id' => $car_id
        ]);
        $respons = $query->fetch(PDO::FETCH_ASSOC);
        return $respons;
    }
    public static function get_pic($pic_id){
        global $db;
        $query = $db->prepare("SELECT file_name FROM accident_pic WHERE id=:id");
        $query->execute([
            'id' => $pic_id
        ]);
        $respon = $query->fetch(PDO::FETCH_ASSOC);
        return $respon;
    }
    public static function set_save($data){
        global $db;
        $query = $db->prepare("UPDATE requests SET send=:send WHERE id=:id");
        return $query->execute($data);
    }
    public static function get_requests(){
        global $db;
        $query = $db->prepare("SELECT * FROM requests WHERE user_id=:user_id AND send=:send");
        $query->execute([
            'user_id' => session('user_id'),
            'send' => 1
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_service_name($service_id){
        global $db;
        $query = $db->prepare("SELECT name FROM services WHERE id=:id");
        $query ->execute([
            'id' => $service_id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC)['name'];
    }
    public static function request_control($request_id,$state){
        global $db;
        $query = $db->prepare("SELECT * FROM requests WHERE id=:id AND user_id=:user_id AND send=:send AND request_state=:request_state");
        $query->execute([
            'id' => $request_id,
            'user_id' => session('user_id'),
            'send' => 1,
            'request_state' => $state
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function delete_request($request_id){
        $res = self::request_control($request_id,0);
        $res1 = self::request_control($request_id,1);
        if ($res || $res1){
            self::update_state($request_id,3);
        }

    }
    public static function update_state($request_id,$state){
        global $db;
        $query = $db->prepare(" UPDATE requests SET request_state=:rq_state WHERE id=:id");
        $query->execute([
            'rq_state' => $state,
            'id' => $request_id
        ]);
    }
}