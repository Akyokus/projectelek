<?php
class usta
{
    
    public static function ustaExist($email, $tel = "")
    {
        global $db;
        $query = $db->prepare("SELECT * FROM repairman WHERE email=:email OR telephone=:tel");
        $query->execute([
            'email' => $email,
            'tel' => $tel
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function get_usta(){
        global $db;
        $query = $db->prepare("SELECT * FROM repairman WHERE id=:id");
        $query->execute([
            'id' => session('usta_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function add_usta($firstname, $lastname, $tel, $password, $email){
        global $db;

        if (!self::ustaExist($email, $tel)) {
            $query = $db->prepare("INSERT INTO repairman SET first_name=:f_name,last_name=:l_name,telephone=:tel,password=:passw,email=:email");
            $res = $query->execute([
                'f_name' => $firstname,
                'l_name' => $lastname,
                'tel' => $tel,
                'passw' => md5($password),
                'email' => $email
            ]);
            if ($res) {
                $message['suc'] = "Başarıyla kayıt oldunuz. Yönlendiriliyorsunuz.";
                header("Refresh: 3; url=" . site_url("page"));
            } else {
                $message['err'] = "Kayıt olurken bir hatayla karşılaştınız.";
            }

        } else {
            $message['err'] = "Bu email adresi veya telefon numarası ile bir kayıt bulunmuştur.";
        }

        return $message;
    }

    public static function login($email, $password){
        $response = self::ustaExist($email);
        if ($response) {
            if ($response['password'] === md5($password)) {
                $_SESSION['usta_id'] = $response['id'];
                $_SESSION['usta_email'] = $response['email'];
                $_SESSION['usta_name'] = $response['first_name'] . " " . $response['last_name'];
                $message['suc'] = "Başarıyla Giriş Yaptınız. Yönlendiriliyorsunuz.";


            } else {
                $message['err'] = "Hatalı bir şifre giriş yaptınız.";
            }
        } else {
            $message['err'] = "Böyle bir usta bulunmamaktadır.";
        }
        return $message;
    }

    public static function change_password($old_pass, $new_pass){
        if (session('usta_email')) {
            $usta_verification = self::ustaExist(session('usta_email'));
            if ($usta_verification) {
                if ($usta_verification['password'] === md5($old_pass)) {
                    global $db;
                    $query = $db->prepare("UPDATE repairman SET password=:passw");
                    $res = $query->execute([
                        'passw' => md5($new_pass)
                    ]);
                    if ($res) {
                        $message['suc'] = "Şifreniz Başarıyla Değiştirilmiştir.";
                    } else {
                        $message['err'] = "Bir hata oluştu. Lütfen tekrar deneyiniz.";
                    }
                } else {
                    $message['err'] = "Lütfen şu an kullandığınız şifrenizi doğru giriniz.";
                }
            } else {
                $message['err'] = "Veritabanı hatası oluşmuştur. Lütfen teknik desteğe başvurunuz.";
            }

        } else {
            $message['err'] = "İzinsiz girdin PİÇ.";
        }
        return $message;
    }


}
