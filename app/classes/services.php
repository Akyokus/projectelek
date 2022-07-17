<?php


class services
{
    public static function get_services(){
        global $db;
        $query = $db->prepare("SELECT * FROM services ORDER BY id ASC");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function searchServices($searching){
        $returnedServices = [];
        $services = self::get_services();
        $searching = strtolower($searching);
        foreach ($services as $service){
            if (strstr(strtolower($service['sname']),$searching)){
                array_push($returnedServices,$service);
            }
        }
        return $returnedServices;
    }
    public static function getServiceByID($id){
        global $db;
        $query = $db->prepare("SELECT * FROM services WHERE id=:id");
        $query->execute([
            'id' => $id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}