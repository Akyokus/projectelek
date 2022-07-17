<?php

if (post('district_next')){
    $data = [
        'user_id' => session('user_id'),
        'province_id' => post('province'),
        'district_name' => post('district')
    ];
    $res = request::province_request($data);
    setcookie("requests",$res);
    if ($res){
        $result = '<div class="row">
        <div class=" col-md-12">
            <div class="form-group">
                <label>Hizmet türünü Seçiniz<label style="color: red">(Zorunlu Alan)</label></label>

                <select required class="form-control form-control-lg" id="services">
                    <option value="1">Tamir</option>
                    <option value="2">Bakım</option>
                    <option value="3">Kaza</option>
                    <option value="4">Temizlik</option>
                    <option value="5">Çekici</option>
                </select>
            </div>
        </div>
    </div>
    <div style="margin-top: 50px" align="center">
        <button onclick="service_next()" type="button" class="mb-2 btn btn-outline-primary btn-rounded">Devam Et</button>
    </div>';
        echo $result;
    }else{
        $message = "Bir hatayla karşılaştık. Lütfen Tekrar Deneyiniz.";
        header("Refresh:2");
    }

    exit();
}
if (post('service_next')){
    $cars = car::get_car();
    $result = '';
    $data = [
        'service' => post('service'),
        'id' => $_COOKIE['requests']
    ];
    $res = request::service_request($data);

    if ($res){
        if ($cars){
            $result .= ' <div class="container" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
                        <a href="'.site_url('add_car').'" class="shadow mr-2 btn btn-success rounded mb-2 add-btn" style="position: absolute; top: 10%; right: 5%;">Ekle</a>
                    <a href="'.site_url('add_car').'" class="shadow mr-2 btn btn-success rounded mb-2 add-btn-mobile" style="display: none;">Ekle</a>';
            foreach ($cars as $car):
                $result .= '<div onclick="choose_car('.$car["id"].')" class="plaka" style="min-width: 350px; width: 35%; margin: 25px;">
                        <button  id="plaka-btn'.$car["id"].'" style="align-items: center;outline: none; padding: 0; background: #fff; display: flex; border: #000 2px solid; width: 100%; border-radius: 12px; text-decoration: none;">
                            <div class="sol-plaka" style="background: #2626d8; width: 60px; height: 80px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; display: flex; flex-direction: column; justify-content: flex-end; align-items: center;">
                                <img src="'.public_url('img/TR.jpg').'" alt="" style="width: 20px; height: 10px;">
                                <h3 style="color: #fff; margin: 0;">TR</h3>
                            </div>
                            <div class="ana-plaka" style="display: flex; justify-content: center; align-items: center; width: 100%;">
                                <h6 style="font-size: 40px; color:#000; padding: 0; margin: 0;display: flex;justify-content: center">'.$car["plaka"].'</h6>
                            </div>
                        </button>
                        <div class="car-information" id="car-information" style="display: flex; flex-direction: column; align-items: center; visibility: hidden; opacity: 0; transition: visibility 0s linear 300ms, opacity 300ms; z-index: 1; position: absolute; top: 50%; left: 50%; margin-left: -500px; margin-top: -250px;  width: 1000px; height: 500px; border-radius: 10px; padding: 10px; background: rgb(255, 255, 255);">
                            <button href="#" id="info-plaka" style=" margin-top: 5%; outline: none; padding: 0; background: #fff; display: flex; border: #000 2px solid; width: 35%; border-radius: 12px; text-decoration: none;">
                                <div class="sol-plaka" style="background: #2626d8; width: 60px; height: 80px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; display: flex; flex-direction: column; justify-content: flex-end; align-items: center;">
                                    <img src="'.public_url('img/TR.jpg').'" alt="" style="width: 20px; height: 10px;">
                                    <h3 style="color: #fff; margin: 0;">TR</h3>
                                </div>
                                <div class="ana-plaka" style="display: flex; justify-content: center; align-items: center; width: 100%;">
                                    <h6 style="font-size: 40px; color:#000; padding: 0; margin: 0;text-align: center;display: flex;justify-content: center">'.$car["plaka"].'</h6>
                                </div>
                            </button>

                            <div class="car-info-title" style="display: flex; justify-content: space-between; width: 100%; padding: 20px; margin-top: 10%;">
                                <div class="part1">
                                    <div class="model" style="display: flex;"><h3 style="color: #000;">Aracın Modeli: </h3><div style="width: 8px; height: 8px;"></div><h3> Mersedes</h3></div>
                                    <div class="model" style="display: flex;"><h3 style="color: #000;">Aracın Kilometresi: </h3><div style="width: 8px; height: 8px;"></div><h3> 50Km</h3></div>
                                    <div class="model" style="display: flex;"><h3 style="color: #000;">Aracın Yılı: </h3><div style="width: 8px; height: 8px;"></div><h3> 2002</h3></div>
                                </div>
                                <div class="part2">
                                    <div class="model" style="display: flex;"><h3 style="color: #000;">Aracın Plakası: </h3><div style="width: 8px; height: 8px;"></div><h3> 34 TZ 34</h3></div>
                                    <div class="model" style="display: flex;"><h3 style="color: #000;">Aracın Motor Gücü: </h3><div style="width: 8px; height: 8px;"></div><h3> 1.7</h3></div>
                                    <div class="model" style="display: flex;"><h3 style="color: #000;">Aracın Yakıt Türü: </h3><div style="width: 8px; height: 8px;"></div><h3> Dizel</h3></div>
                                </div>

                            </div>




                            <button id="close" style="background: none; outline: none; border: none; position: absolute; top: 10px; right: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg></button>
                        </div>
                    </div>';
            endforeach;
        }else{
            $result .= '<div class="container" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
                        <a href="'.site_url('add_car').'" class="shadow mr-2 btn btn-success rounded mb-2 add-btn" style="position: absolute; top: 10%; right: 5%;">Ekle</a>
                    <a href="'.site_url('add_car').'" class="shadow mr-2 btn btn-success rounded mb-2 add-btn-mobile" style="display: none;">Ekle</a>';
        }
        $result .=  '</div>
<div style="margin-top: 50px" align="center">
                    <button onclick="car_next()" type="button" class="mb-2 btn btn-outline-primary btn-rounded">Devam Et</button>
                </div>
        </div>

        <!-- page content ends -->
    </div>
    
   ';


        echo $result;
    }else{
        $message = "Bir hatayla karşılaştık. Lütfen Tekrar Deneyiniz.";
    }
    exit();
}
if (post('car_next')){
    $selected_car = car::get_car_id(post('selected'));
    $req_id = $_COOKIE['requests'];
    $data = [
        'car_id' => $selected_car['id'],
        'id' => $req_id
    ];
    $res = request::car_request($data);
    if ($res){
        echo '<form enctype="multipart/form-data" action="'.site_url('upload').'" method="post">
            <div class="row">
                <div class=" col-md-12">
                    <div class="form-group">
                        <div class="select-image" style="padding-bottom: 2.5%; border-bottom: #000 1px solid;">
                            <label for="image_input">İsterseniz sorunla ilgili fotoğraf yükleyebilirsiniz.</label>
                            <input name="problem_pic[]"  type="file" multiple="multiple" class="form-control form-control-lg">
                        </div>
                        <div class="problem-text" style="width: 100%; margin-top: 2.5%;">
                        <label for="image_input">Sorunu kısaca anlatınız.<label style="color: red">(Zorunlu Alan)</label></label>
                            <textarea required name="problem" id="problem" maxlength="460" style="width: 100%; height: 250px; border-radius: 7px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 50px" align="center">
                 <button name="upload_file" value="1" type="submit" class="mb-2 btn btn-outline-primary btn-rounded">Devam Et</button>
            </div></form>';
    }else{
        $message = "Bir hatayla karşılaştık. Lütfen Tekrar Deneyiniz.";
    }
    exit();
}
if (post('problem_next')){
    $image = post('image');
    $respon = file_upload::files_upload($image,"accident_pic");
    echo $respon;
    exit();
}
if (post('save')){
    $data = [
        'send' => 1,
        'id' => $_COOKIE['requests']
    ];
    $res = request::set_save($data);
    if ($res){
        echo "İlanınız başarıyla oluşturulmuştur. Teklif geldiğinde bildirim alacaksınız.";
    }
    exit();
}
if (post('requestss')){
        $requests = request::get_requests();
    $response =  '
<div class="container">
            <!-- page content here -->
            ';
    foreach ($requests as $request):
        if ($request['request_state'] != 3) {
            $car = car::get_car_id($request['car_id']);
            $brand = car::get_car_brand($car['brand_id']);
            $service = request::get_service_name($request['service']);
            $response .= '
            <div class="card shadow border-0 mb-3 ';
            if ($request['request_state'] == 0) {
                $response .= 'new-bid-card';
            } elseif ($request['request_state'] == 1) {
                $response .= 'waiting-card';
            } elseif ($request['request_state'] == 2) {
                $response .= 'completed-card';
            }
            $response .= '">
                <div class="card-body';
            if ($request['request_state'] == 0) {
                $response .= 'new-bid-card-body';
            } elseif ($request['request_state'] == 1) {
                $response .= 'waiting-card-body';
            } elseif ($request['request_state'] == 2) {
                $response .= 'completed-card-body';
            }
            $response .= '" style="display: flex; border-radius: 8px;">
                    <div onclick="delete_ad(' . $request["id"] . ')" class="delete-btn" style="position: absolute; top: 0; right: 0;">
                        <button style="background: none; border: none; outline: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="car-informaiton" style="min-width: 50%; padding: 5px;">
                        
                        <h1 class="car-info-title" style=" border-bottom: 2px solid #000; font-weight: 200; white-space: nowrap;">Araç Bilgileri</h1>
                        <ul class="list pl-4 my-3 car-info-texts">
                            <li>Araç Markası: ' . $brand . '</li>
                            <li>Araç Plakası: ' . $car["plaka"] . '</li>
                            <li>Araç Yılı: ' . $car["car_year"] . '</li>
                            <li>Araç Kilometresi: ' . $car["total_km"] . ' Km</li>
                            <li>Aracın Motor Gücü: ' . $car["motor_power"] . '</li>
                            <li>Aracın yakıt türü: ' . $car["fuel_type"] . '</li>
                            <li style="font-weight: 900; font-size: 20px;">Hizmet Tipi: ' . $service . '</li>
                        </ul>
                    </div>';
            if ($request['request_state'] == 0) {
                $response .= '<div class="bid-info-price" style="min-width: 50%; display: flex; flex-direction: column; align-items: center;">
                        <div class="bids" style="border: #000 solid 2px; margin-left: 20%; padding: 10px; border-radius: 7px;margin-top: 30px">
                            <a href="#" style="text-decoration: none; color: #212529;"><h3 class="bid-state" style="margin: 0; font-weight: 700; font-size: 3vw;">Teklifleri incele</h3></a>
                        </div>
                        <div class="pricing" style="border: #000 solid 2px; margin-left: 20%; margin-top: 10%; padding: 10px; border-radius: 7px;">
                            <h3 class="bid-state" style="margin: 0;font-weight: 200; font-size: 3vw">Yeni Teklifler Var !</h3>
                        </div>
                    </div>';
            } elseif ($request['request_state'] == 1) {
                $response .= '<div class="bid-info-price" style="min-width: 50%; display: flex; flex-direction: column; align-items: center;">
                        <div class="bid-status" style="width: 50%; text-align: center; margin-left: 20%; padding: 10px;">
                            <h3 class="bid-state" style="margin: 0; font-weight: 200; white-space: nowrap; font-size: 3vw; font-size: max(3vw, 10px);">Teklif Bekliyor</h3>
                        </div>
                        
                    </div>';
            } elseif ($request['request_state'] == 2) {
                $response .= '<div class="bid-info-price" style="min-width: 50%; display: flex; flex-direction: column; align-items: center;">
                        <div class="bid-status" style="width: 50%; text-align: center; margin-left: 20%; padding: 10px;">
                            <h3 class="bid-state" style="font-size: 4vw; margin: 0; font-weight: 200; white-space: nowrap;">Tamamlandı</h3>
                        </div>
                        <div class="pricing" style="border: #000 solid 2px; margin-left: 20%; margin-top: 10%; padding: 10px; border-radius: 7px;">
                            <h3 class="bid-state" style="margin: 0; font-size: 3vw">45 TL</h3>
                        </div>
                    </div>';
            }
            $response .= '</div>
            </div>';
        }else{

        }
    endforeach;
    echo $response;
}

if (post('delete_id')){
    request::delete_request(post('id'));
    echo 'İlanınız Başarıyla Silinmiştir.';
}
if (post('get_profile')){
    $user = user::get_user();
    $r = '<div class="container" style="text-align: center;">
        <div class="user-img-name">
            <img src="'.public_url('img/user_icon3.png').'" alt="" style="border-radius: 100%; margin-bottom: 2%;height: 90px;width: 90px">
            <h3>'.session("user_name").'</h3>
        </div>
        <div class="user-information" style="display: flex; justify-content:center; align-items: center; width: 100%; padding: 20px; margin-top: 2%;  align-items: center; flex-wrap: wrap;">
                <div class="phone-number" style="width: 50%; display: flex; flex-direction: column; align-items: center; ">
                    <i class="material-icons" style="background: rgba(90, 180, 0, 0.555); padding: 25px; border-radius: 100%; font-size: 60px; color: rgb(87, 173, 0); margin-bottom: 2%;">phone</i>
                    <div id="change_tel" class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; white-space: nowrap;">'.$user["telephone"].'</h3></div>
                </div>
                <div class="e-mail" style="width: 50%; display: flex; flex-direction: column; align-items: center;">
                    <i class="material-icons" style="background: #1a74db7e; padding: 25px; border-radius: 100%; font-size: 60px; color: #1a74db; margin-bottom: 2%;">mail</i>
                    <div class="numberW" style="display: flex;"><h3 style="color: #000; font-weight: 200; white-space: nowrap;">'.session("user_email").'</h3></div>
                </div>
                <div class="work-number" style="width: 50%; display: flex; flex-direction: column; align-items: center; margin-top: 10%;">
                    <i class="material-icons" style="background: rgb(238, 255, 0, 0.555); padding: 25px; border-radius: 100%; font-size: 60px; color: rgb(205, 219, 0); margin-bottom: 2%;">work</i>
                    <div style="display: flex;"><h3 style="color: #000; font-weight: 200; white-space: nowrap;">19 kez hizmeti kullandı</h3></div>
                </div>
        </div>
        <div id="change_button">
        <button onclick="change_profile()" type="button" class="btn btn-primary rounded m-2" data-toggle="modal" data-target="#exampleModalScrollable">
            Düzenle
        </button>
        </div>
        </div>
    </div>';
    echo $r;
}
if (post('change_tel')){
    echo '<div class="form-group float-label">
                        <input id="tel" type="text" class="form-control" required="">
                        <label for="tel" class="form-control-label">Telefon Numaranız</label>
                    </div>';
}
if (post('save_profile')){
    user::save_profile(post('tel'));
    echo 'Telefon numaranız başarıyla değiştirilmiştir. Anasayfaya yönlendiriliyorsunuz.';
}
if (post('get_garage')){
    $cars = car::get_car();
    $re = '';
    if ($cars){
        $re .= ' <h3 style="text-align: center">GARAJ</h3><br> 
 <div class="container" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
                                                               
                        <a onclick="addNewCar()" class="shadow mr-2 btn btn-success rounded mb-2 add-btn" style="position: absolute; top: 10%; right: 5%;">Ekle</a>
                    <a onclick="addNewCar()" class="shadow mr-2 btn btn-success rounded mb-2 add-btn-mobile" style="display: none;">Ekle</a>';
        foreach ($cars as $car):
            $re .= '
            <div  class="plaka" style="min-width: 350px; width: 35%; margin: 25px;">
                        <button  id="plaka-btn'.$car["id"].'" style="align-items: center;outline: none; padding: 0; background: #fff; display: flex; border: #000 2px solid; width: 100%; border-radius: 12px; text-decoration: none;">
                            <div class="sol-plaka" style="background: #2626d8; width: 60px; height: 80px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; display: flex; flex-direction: column; justify-content: flex-end; align-items: center;">
                                <img src="'.public_url('img/TR.jpg').'" alt="" style="width: 20px; height: 10px;">
                                <h3 style="color: #fff; margin: 0;">TR</h3>
                            </div>
                            <div class="ana-plaka" style="display: flex; justify-content: center; align-items: center; width: 100%;">
                                <h6 style="font-size: 40px; color:#000; padding: 0; margin: 0;display: flex;justify-content: center">'.$car["plaka"].'</h6>
                            </div>
                        </button>
                        <div class="car-information" id="car-information3" style="display: flex; flex-direction: column; align-items: center; visibility: hidden; opacity: 0; transition: visibility 0s linear 300ms, opacity 300ms; z-index: 1; position: absolute; top: 50%; left: 50%; margin-left: -500px; margin-top: -250px;  width: 1000px; height: 500px; border-radius: 10px; padding: 10px; background: rgb(255, 255, 255);">
                            <button href="#" id="info-plaka3" style=" margin-top: 5%; outline: none; padding: 0; background: #fff; display: flex; border: #000 2px solid; width: 35%; border-radius: 12px; text-decoration: none;">
                                <div class="sol-plaka" style="background: #2626d8; width: 60px; height: 80px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; display: flex; flex-direction: column; justify-content: flex-end; align-items: center;">
                                    <img src="'.public_url('img/TR.jpg').'" alt="" style="width: 20px; height: 10px;">
                                    <h3 style="color: #fff; margin: 0;">TR</h3>
                                </div>
                                <div class="ana-plaka" style="display: flex; justify-content: center; align-items: center; width: 100%;">
                                    <h6 style="font-size: 40px; color:#000; padding: 0; margin: 0;text-align: center;display: flex;justify-content: center">'.$car["plaka"].'</h6>
                                </div>
                            </button>

                            <div class="car-info-title" style="display: flex; justify-content: space-between; width: 100%; padding: 20px; margin-top: 10%;">
                                <div class="part1">
                                    <div class="model" style="display: flex;"><h3 style="color: #000;">Aracın Modeli: </h3><div style="width: 8px; height: 8px;"></div><h3> Mersedes</h3></div>
                                    <div class="model" style="display: flex;"><h3 style="color: #000;">Aracın Kilometresi: </h3><div style="width: 8px; height: 8px;"></div><h3> 50Km</h3></div>
                                    <div class="model" style="display: flex;"><h3 style="color: #000;">Aracın Yılı: </h3><div style="width: 8px; height: 8px;"></div><h3> 2002</h3></div>
                                </div>
                                <div class="part2">
                                    <div class="model" style="display: flex;"><h3 style="color: #000;">Aracın Plakası: </h3><div style="width: 8px; height: 8px;"></div><h3> 34 TZ 34</h3></div>
                                    <div class="model" style="display: flex;"><h3 style="color: #000;">Aracın Motor Gücü: </h3><div style="width: 8px; height: 8px;"></div><h3> 1.7</h3></div>
                                    <div class="model" style="display: flex;"><h3 style="color: #000;">Aracın Yakıt Türü: </h3><div style="width: 8px; height: 8px;"></div><h3> Dizel</h3></div>
                                </div>
                            </div>




                            <button id="close" style="background: none; outline: none; border: none; position: absolute; top: 10px; right: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg></button>
                        </div>
                    </div>
                    ';
        endforeach;
    }else{
        $re .= '<div class="container" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
                        <a onclick="addNewCar()" class="shadow mr-2 btn btn-success rounded mb-2 add-btn" style="position: absolute; top: 10%; right: 5%;">Ekle</a>
                    <a onclick="addNewCar()" class="shadow mr-2 btn btn-success rounded mb-2 add-btn-mobile" style="display: none;">Ekle</a>';
    }
    echo $re;
}
if (post('add_newCar')){
    $brands = car::get_brands();

    $dafsd = '<h3 style="text-align:center">Lütfen aracınızın markasını seçerek Devam Et butonuna dokununuz.</h3><section class="car-brands">';
    foreach ($brands as $brand):
        $dafsd .= '<div style="" onclick="choose_brand('.$brand["id"].')" id="brand-'.$brand["id"].'" class="car-brand-frame"><a title="'.$brand["brand_name"].'"><img class="make-logo" src="'.$brand["img_url"].'" alt="'.$brand["brand_name"].'" title="'.$brand["brand_name"].'" width="90" height="61"><strong>'.$brand["brand_name"].'</strong></a></div>';
    endforeach;
    echo $dafsd.'</section> <div style="margin-top: 50px" align="center">
                 <button onclick="add_brand()" value="1" type="submit" class="mb-2 btn btn-outline-primary btn-rounded">Devam Et</button>
            </div>';
}
if (post('add_brand')){
    setcookie("brand",post('selected_brand'));
    $rtr = ' <div class="container" style="display: flex; flex-wrap: wrap; justify-content: center; padding-top: 100px;">
            <input type="text" class="form-control" id="modal" placeholder="Araç modelini giriniz.." style="width: 100%; margin: 10px;">

            <select id="fuel_type" class="form-control" style="width: 100%; margin: 10px;">
                <option>Lütfen aracınızın yakıt türünü seçin..</option>
                <option value="dizel">Dizel</option>
                <option value="benzin">Benzin</option>
                <option value="lpg">LPG</option>
                <option value="elektrikli">Elektrikli</option>
                <option value="hibrit">Hibrit</option>
            </select>

            <input type="text" class="form-control" id="km" placeholder="Araç kilometresini giriniz.." style="width: 100%; margin: 10px;">
            <input type="text" class="form-control" id="year" placeholder="Araç yılını giriniz.." style="width: 100%; margin: 10px;">
            <input type="text" class="form-control" id="power" placeholder="Araç motor gücünü giriniz.." style="width: 100%; margin: 10px;">



         
            
            <div class="plaka-input" style="width: 48%; display: flex; align-items: center;">
                <input type="text" id="plaka-input" class="form-control" placeholder="Araç Plakasını giriniz.." style="width: 100%; margin: 10px;" onchange="Plakalik(this.value)" >
            </div>


            <button onclick="save_car()" type="button" class="shadow mr-2 btn btn-success rounded mb-2" style="width: 55%; margin-top: 10%">Gönder</button>



        </div>';
    echo $rtr;
}
if (post("save_car")){
    $data = [
        'user_id' => session('user_id'),
        'car_year' => post('year'),
        'brand_id' => $_COOKIE['brand'],
        'modal_id' => post('modal'),
        'plaka' => post('plaka'),
        'total_km' => post('km'),
        'motor_power' => post('power'),
        'fuel_type' => post('fuel_type')
    ];

    echo car::add_car($data);
}