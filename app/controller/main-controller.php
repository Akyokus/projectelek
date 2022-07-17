<?php



if (post('create_req')){
    $provinces = database::get_province();
    $service_id = post('req_id');
    setcookie("service_id",$service_id);
    $result = '<main id="servicesmain" style="width: 70rem; margin: 0 auto;">
            <div class="d-flex align-items-center py-4">
                <button class="d-flex align-items-center justify-content-center"
                    style="box-shadow: 0 2px 3px 0 #dce0e6; border-radius: 100%; border: none; padding: 1rem; height: 40px; width: 40px; margin-right: 1rem; color: #788391 !important; background-color: #fff !important;">
                    <i class="fas fa-arrow-left" style="color: #888;"></i>
                </button>
                <h1 class="p-0 m-0" style="font-size: 1.8rem;">Konum seçiniz</h1>
            </div>
            <div class="row px-3"
                style="background-color: #fff; box-shadow: 0 2px 4px 0 #d9dce9; border-radius: 10px; padding: 0.4rem 0;">

                <div id="sehirSecme" class="row d-flex justify-content-center">
                    <div class="col-lg-5 col-sm-8 col-11 py-4">
                        <div class="border-bottom pb-3">
                            <div>
                                <select onchange="select_province()" required name="city" id="city">';
                foreach ($provinces as $province){
                    $result.=  '<option  value="'.$province["il_no"].'">'.$province["isim"].'</option>';
                }
            $result .= '</select>
                            </div>
                            <div id="select_district">
                                <select required disabled name="district" id="district">
                                    <option value="">İlçe</option>
                                    <option value="">İlçe</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button onclick="request_province()" class="btn btn-dangerEk">Devam Et</button>
                            </div>
                        </div>

                        <div class="pt-3">
                            <p class="text-muted" style="text-align: center;">Şuan ki konumunuzu kullanmak isterseniz. Lütfen butona tıklayınız.
                            Ve konumunuza erişmemize izin veriniz. Sadece tek seferlik konumuza ulaşacağız.</p>
                            <div class="text-center">
                                <button class="btn btn-primary"><i class="fas fa-map-marker-alt "
                                        style="margin-right: 0.5rem;"></i>Şuanki Konumu Kullan</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>';
    echo $result;
    $result = "";
    exit();
}
if (post('select_province')){
    $districts = database::get_district(post('province_id'));
    $result = '<select required name="district" id="district">';
    foreach ($districts as $district){
        $result .= '<option value="'.$district["id"].'">'.$district["ad"].'</option>';
    }
        $result .= '</select>';
    echo $result;
    $result = "";
    exit();
}
if (post('login')){
    $result =  '
         <main class="d-flex justify-content-center row my-5" >
            <div class="signInE p-5" style="background-color: #fff; border: 1px solid #e8e8e8; box-shadow: 0 .5rem 1rem rgba(51,51,51,.15)!important; border-radius: 12px; width: 25rem">
                <h4>Giriş Yap</h4>
                <form action="'.site_url('login').'" method="post">
                <div class="d-flex flex-column mt-5 mb-0 row">
                    <input type="email" name="mail" id="" placeholder="Email">
                    <p class="errorText mt-3 row" style="color: red;">Email zorunlu</p>
                </div>
                <div class="d-flex mt-3 row">
                    <input class="col-9" style="border-right: none;" type="password" name="password" id="password" placeholder="Şifre">
                    <a  class="col-3 btn" onclick="eye()" style="border: 1px solid #009ed5;"><i class="far fa-eye-slash"></i></a>
                    <p class="errorText mt-3 row" style="color: red;">Şifre Zorunlu</p>
                </div>
                <a class="row" style="color: #009ed5;" href="#">Parolanızı mı unuttunuz?</a>
                <div class="row mt-4">
                    <button name="submit" value="1" class="btn btn-secondary col-12">Giriş Yap</button>
                    <p class="text-center">-or-</p>
                    <button class="btn col-12 btnface mt-3" style="background-color: #3b5c9f; color: #fff;">
                        <span><i class="fab fa-facebook-square"></i></span>
                        Facebook ile giriş yap
                    </button>
                </div>
                </form>
            </div>
        </main>';
    echo $result;
    $result = '';
    exit();
}
if (post('getService')){
    $services = services::get_services();
    $result = '';
    foreach ($services as $service) {
        $result .=   '
                                            <button onclick="completed('.$service["id"].')" class="list-group-item list-group-item-action">
                                                <span><strong>'.$service["sname"].'</strong></span>
                                            </button>';
    }
    print_r($result);
    $result = '';
    exit();
}
if (post('getServiceName')){
    echo services::getServiceByID(post('getServiceName'))['sname'];
    exit();
}
if (post('searchService')){
    $result = '';
    $services = services::searchServices(post('text'));
    foreach ($services as $service) {
     $result .=   '
                                            <button onclick="completed('.$service["id"].')" class="list-group-item list-group-item-action">
                                                <span><strong>'.$service["sname"].'</strong></span>
                                            </button>';
    }
    print_r($result);
    $result = '';
    exit();
}
if (post('request_province')){
    $data = [
        'user_id' => session('user_id'),
        'province_id' => post('city'),
        'district_name' => post('district')
    ];
    $res = request::province_request($data);

    if ($res){
        setcookie("requests",$res);
        $data2 = [
            'service' => $_COOKIE['service_id'],
            'id' => $_COOKIE['requests']+1
        ];
        echo request::service_request($data2);
        $cars = car::get_car();

        $result = '<main id="servicesmain" style="width: 70rem; margin: 0 auto;">
            <div class="d-flex align-items-center py-4">
                <button class="d-flex align-items-center justify-content-center"
                    style="box-shadow: 0 2px 3px 0 #dce0e6; border-radius: 100%; border: none; padding: 1rem; height: 40px; width: 40px; margin-right: 1rem; color: #788391 !important; background-color: #fff !important;">
                    <i class="fas fa-arrow-left" style="color: #888;"></i>
                </button>
                <h1 class="p-0 m-0" style="font-size: 1.8rem;">Hangi aracınızın servise ihtiyacı var?</h1>
            </div>
            <div class="row px-3"
                style="background-color: #fff; box-shadow: 0 2px 4px 0 #d9dce9; border-radius: 10px; padding: 0.4rem 0;">
                <div class="borderRemove col-12 mt-1 px-5" style="margin-bottom: 5rem;">
                    <!-- style="border-right: 1px solid rgba(136, 136, 136, 0.377); padding-bottom: 2rem;" -->

                    <div class="aracSecme row pt-4">';
        if (!isset($cars)){
            $result .= '<div>
                            <button class="btn col-12 shadow-sm btnAracEkle" style="color: rgb(0, 158, 213); justify-content: center;">
                                <i class="fas fa-plus"></i>
                                <span>Araç Ekle</span>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </main>';
        }else {
            foreach ($cars as $car){
                $brand = car::get_car_brand($car['brand_id']);
                $car['brand_id'] = $brand[0]['brand_name'];
                $car['img'] = $brand[0]['img_url'];
                $result .= '<div>
                            <button onclick="request_car('.$car["id"].')" class="btn col-12 shadow-sm">
                                <img src="'.$car["img"].'" class="car-logo">
                                <span>'.$car["brand_id"].'</span>
                            </button>
                        </div>';

            }
            $result .= '<div>
                            <button class="btn col-12 shadow-sm btnAracEkle" style="color: rgb(0, 158, 213); justify-content: center;">
                                <i class="fas fa-plus"></i>
                                <span>Araç Ekle</span>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </main>';
        }

        echo $result;
        $result = '';
        exit();

        }else{
            echo "başarısız";
            exit();
    }
}
if (post('request_car')){
    $data = [
        'car_id' => post('car_id'),
        'id' => $_COOKIE['requests']
    ];
    $res = request::car_request($data);
    $result = '<main id="servicesmain" style="width: 70rem; margin: 0 auto;">
            <div class="d-flex align-items-center py-4">
                <button class="d-flex align-items-center justify-content-center"
                    style="box-shadow: 0 2px 3px 0 #dce0e6; border-radius: 100%; border: none; padding: 1rem; height: 40px; width: 40px; margin-right: 1rem; color: 788391 !important; background-color: #fff !important;">
                    <i class="fas fa-arrow-left" style="color: #888;"></i>
                </button>
                <h1 class="p-0 m-0" style="font-size: 1.8rem;">Tamirci için bir not ekleyin.</h1>
            </div>
            <div class="row px-3"
                style="background-color: #fff; box-shadow: 0 2px 4px 0 #d9dce9; border-radius: 10px; padding: 0.4rem 0;">
                <div class="borderRemove col-12 mt-1 px-5" style="margin-bottom: 5rem;">
                    <!-- style="border-right: 1px solid rgba(136, 136, 136, 0.377); padding-bottom: 2rem;" -->

                    <div style="margin-top: 2rem;">
                        <div>
                            <textarea name="" id="note" rows="8"
                                placeholder="Sağlayabileceğiniz herhangi bir ek bilgi, aldığınız tahminlerin doğruluğunu artıracaktır."
                                style="width: 100%; padding: 1rem;"></textarea>
                        </div>
                    </div>
                    <div id="noteshover" style="margin-top: 2rem; font-weight: 700; padding-right: 1rem;"
                        class="row justify-content-end align-items-center">
                        <div class="col-lg-3 col-12 mb-2" style="padding: 0;">
                            <!-- <div id="msg"></div> -->
                           
                        </div>
                        
                        <button onclick="save()" class="col-xl-3 col-lg-4 p-4"
                            style="color: #fff; box-shadow: 0 2px 3px 0 rgb(120 131 145 / 30%); border: none; background-color: #e83c79; margin-left: 1rem;">
                            <span>Devam Et</span>
                            <i class="fas fa-angle-right" style="margin-left: 0.6rem;"></i>
                        </button>
                    </div>
                    
                </div>
            </div>
        </main>';
    echo $result;
    $result = '';
    exit();
}
if (post('save')){
    $data1 = [
        'description' => post('des'),
        'pic_id' => 1,
        'id' => $_COOKIE['requests']
    ];
    request::problem_request($data1);
    $data = [
        'send' => 1,
        'id' => $_COOKIE['requests']
    ];
    $res = request::set_save($data);
    if ($res){
       echo 'İlanınız başarıyla oluşturuldu. Teklif aldığınızda bilgilendirileceksiniz.';
    }else{
        echo 'İlan oluşturulurken bir hata oluştu. Lütfen tekrar deneyiniz.';
    }
}
if (post('profile')) {
    $result = '<main id="servicesmain" style="width: 60rem; margin: 0 auto; min-height: 50vh;">
            <div class="d-flex align-items-center py-0 row">
                <div class="d-flex align-items-center py-4 px-0">
                    <button class="d-flex align-items-center justify-content-center"
                        style="box-shadow: 0 2px 3px 0 #dce0e6; border-radius: 100%; border: none; padding: 1rem; height: 40px; width: 40px; margin-right: 1rem; color: 788391 !important; background-color: #fff !important;">
                        <i class="fas fa-arrow-left" style="color: #888;"></i>
                    </button>
                    <h1 class="p-0 m-0" style="font-size: 1.8rem; font-weight: 700;">' . session("user_name") . '</h1>
                </div>
            </div>
            <div class="row"
                style="background-color: #fff; box-shadow: 0 2px 4px 0 #d9dce9; border-radius: 10px; padding: 1rem 0;">
                <div class="row px-5" style="font-size: 0.9rem !important;">
                    <button onclick="profilBilgileriButton()" class="ayar col-4 text-center browseByCactive">Profil
                        Bilgileri</button>
                    <button onclick="profilSifreButton()" class="ayar col-4 text-center">Şifre</button>
                    <button onclick="profilAraclarButton()" class="ayar col-4 text-center">Araçlar</button>

                    <div id="accountinfo" style="padding: 0;">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-5 col-sm-8 col-11 py-4">
                                <div class="formX d-flex flex-column">
                                    <input type="text" class="form-control" disabled value="' . explode(' ', session("user_name"))[0] . '"  aria-describedby="emailHelpId"
                                        placeholder="">
                                    <label for="">Ad:</label>
                                </div>
                                <div class="formX d-flex flex-column">
                                    <input disabled type="text" class="form-control" value="' . explode(' ', session("user_name"))[1] . '"  aria-describedby="emailHelpId"
                                        placeholder="">
                                    <label for="">Soyad:</label>
                                </div>
                                <div class="formX d-flex flex-column">
                                    <input disabled type="email" class="form-control" value="' . session("user_email") . '" id=""
                                        aria-describedby="emailHelpId" placeholder="">
                                    <label for="">Email:</label>
                                </div>';
    $user = user::get_user();
    $result .= '
                                <div class="formX d-flex flex-column">
                                    <input type="text" class="form-control" value="' . $user["telephone"] . '" name="" id="tel" aria-describedby="emailHelpId"
                                        placeholder="">
                                    <label for="">Telefon:</label>
                                </div>
                                <button onclick="save_profile()" class="btn btn-danger">Bilgileri Güncelle</button>
                            </div>
                        </div>
                    </div>
                    <div id="accountPassword" style="padding: 0; display: none">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-5 col-sm-8 col-11 py-4">
                                <div class="formX d-flex flex-column">
                                    <input type="text" class="form-control" name="" id="current_pass"  aria-describedby="emailHelpId"
                                        placeholder="">
                                    <label for="">Şuanki Şifre</label>
                                </div>
                                <div class="formX d-flex flex-column">
                                    <input type="text" class="form-control" name="" id="new_pass" aria-describedby="emailHelpId"
                                        placeholder="">
                                    <label for="">Yeni Şifre</label>
                                </div>
                                <button onclick="update_pass()" class="btn btn-danger">Şifreyi Güncelle</button>
                            </div>
                        </div>
                    </div>
                    <div id="accountGarage" style="padding: 0; display: none">
                        <div class="row">
                            <button class="btn w-25 mt-3"
                                style="margin-left: auto; color: #009ed5; background-color: #fff; border: 1px solid #e5e8ed; box-shadow: 0 2px 2px 0 rgb(220 224 230 / 50%); border-radius: 14px;"><i
                                    class="fas fa-plus"></i>Araç Ekle</button>';
    $cars = car::get_car();
    foreach ($cars as $car) {
        $brand = car::get_car_brand($car['brand_id']);
        $car['brand_id'] = $brand[0]['brand_name'];
        $car['img'] = $brand[0]['img_url'];
        $result .= '

                            <div class="arac mt-3 ">
                                <div class="row d-flex align-items-center px-3 ">
                                    <div class="col-lg-3">
                                        <img style="border: 1px solid #d4d8de; border-radius: 10px; max-width: 150px;"
                                            src="' . $car["img"] . '" alt="">
                                    </div>
                                    <div class="col-lg-9 mt-3">
                                        <h4 style="color: #e83c79;">' . $car["brand_id"] . " " . $car["motor_power"] . " " . $car["fuel_type"] . " " . $car["car_year"] . '
                                        </h4>
                                        <div class="d-flex flex-lg-row flex-column" style="margin-top: 2rem;">
                                            <span
                                                style="color: #788391; font-size: 1rem; margin-right: 1rem; border-right: 1px solid #888; padding-right: 1rem;">Kilometre:
                                                <span class="km"
                                                    style="color: #000; font-weight: 700; margin-left: 0.6rem;">' . $car["total_km"] . '</span>
                                            </span>
                                            <span
                                                style="color: #788391; font-size: 1rem; margin-right: 1rem; border-right: 1px solid #888; padding-right: 1rem;">Plaka:
                                                <span class="km"
                                                    style="color: #000; font-weight: 700; margin-left: 0.6rem;">' . $car["plaka"] . '</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';

    }
    $result .= '</div>
                    </div>
                </div>
            </div>

        </main>';
    echo $result;
    $result = '';
}
if (post('save_profile')){
    $res = user::save_profile(post('tel'));
    if (!$res){
        echo "Bilgileriniz başarıyla güncellendi.";
    }else{
        echo "Bilgileriniz güncellenirken bir hata oluştu. Lütfen tekrar deneyiniz.";
    }
}
if (post('update_pass')){
    $res = user::change_password(post('cur'),post('newd'));
    if ($res['suc']){
        echo $res['suc'];
    }else{
        echo $res['err'];
    }
}
if (post('requests')){
    $requests = request::get_requests();
    $result = '        <main id="servicesmain" style="width: 70rem; margin: 0 auto;">
            <div class="d-flex align-items-center py-4 row">
                <h1 class="p-0 m-0" style="font-size: 1.8rem;">İlanlarınız</h1>
            </div>
            <div class="row px-3"
                style="background-color: #fff; box-shadow: 0 2px 4px 0 #d9dce9; border-radius: 10px; padding: 2rem 0;">';
        if (isset($requests)) {
            foreach ($requests as $request) {
                $car = car::get_car_id($request['car_id']);
                $brand = car::get_car_brand($car['brand_id']);
                $car['brand_id'] = $brand[0]['brand_name'];
                $car['img'] = $brand[0]['img_url'];
                $service_name = services::getServiceByID($request['service'])['sname'];
                $result .= '<div class="ilan p-4 mb-4" style="color: #404040;">
                    <h4>' . $service_name . '</h4>
                    <div class="row mt-4">
                        <div class="col-md-9 col-12 d-flex justify-content-md-start justify-content-center">
                            <img style="border-radius: 10px; max-width: 400px;" src="' . $car["img"] . '" alt="">
                            <div style="margin-left: 1rem; margin-top: 0;">
                                <div>
                                    <p style="font-weight: 600;">ARABA:</p>
                                    <p class="text-muted">' . $car["brand_id"] . '</p>
                                </div>
                                <div>
                                    <p style="font-weight: 600;">SERVİS:</p>
                                    <p class="text-muted">' . $service_name . '</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 d-flex justify-content-center flex-md-column mt-md-0 mt-3 estimate540">
                            <div class="d-flex flex-column text-center" style="background-color: #F4F6FA; border-radius: 10px; margin-bottom: 1rem; padding: 1rem 0;">
                                ';
                if ($request['request_state'] == 0) {
                    $result .= '<span style="font-size: 2rem;">Teklif Bekliyor</span>';
                }elseif ($request['request_state'] == 1 ){
                    $result .= '<span style="font-size: 2rem;">Yeni Teklifler Var</span>';
                }else{
                    $result .= '<span style="font-size: 2rem;">Hizmet Tamamlandı !</span>';
                }


                $result .='</div>
                            <button onclick="request('.$request["id"].')" class="btn btn-danger">Detaylar</button>
                        </div>
                    </div>
                </div>';
            }
        }else{
            $result .= 'Aktif ilanınız bulunmamaktadır.';
        }
        $result .= '</div>
                    </main>';
    echo $result;
    $result = '';
    exit();
}