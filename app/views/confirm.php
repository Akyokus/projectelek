<?php require "mainPage_statics/header.php"; ?>
<div class="container">
    <!-- page content here -->
    <div class="row" style="margin-top: 20px">
        <div class="swiper-container icon-slide mb-4 swiper-container-horizontal">
            <div class="swiper-wrapper">
                <a class="swiper-slide text-center swiper-slide-active">
                    <div class="avatar avatar-60 no-shadow border-0">
                        <div class="overlay gradient-success"></div>
                        <i class="material-icons text-success">account_balance</i>
                    </div>
                    <p class="small mt-2">Şehir Seçimi</p>
                </a>

                <a class="swiper-slide text-center swiper-slide-next">
                    <div class="avatar avatar-60 no-shadow border-0">
                        <div class="overlay gradient-warning"></div>
                        <i class="material-icons text-warning">videogame_asset</i>
                    </div>
                    <p class="small mt-2">Hizmet Seçimi</p>
                </a>
                <a class="swiper-slide text-center">
                    <div class="avatar avatar-60 no-shadow border-0">
                        <div class="overlay gradient-danger"></div>
                        <i class="material-icons text-danger">cake</i>
                    </div>
                    <p class="small mt-2">Araç Ekleme/Seçimi</p>
                </a>
                <a class="swiper-slide text-center">
                    <div class="avatar avatar-60 no-shadow border-0">
                        <div class="overlay gradient-info"></div>
                        <i class="material-icons text-info">local_florist</i>
                    </div>
                    <p class="small mt-2">Sorun Tespit</p>
                </a>
                <a class="swiper-slide text-center">
                    <div class="avatar avatar-60 no-shadow border-0">
                        <div class="overlay gradient-primary"></div>
                        <i class="material-icons text-primary">camera</i>
                    </div>
                    <p class="small mt-2">İlanı Oluştur</p>
                </a>
            </div>
            <div class="swiper-pagination"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
    <div id="change_service">
        <div class="row">
            <div class=" col-md-12">
                <div class="form-group" style="display: flex; flex-direction: column; align-items: center;">
                    <div class="city" style="display: flex; width: 100%; justify-content: space-around;  padding: 15px; align-items: center;">
                        <h4 style=" font-weight: 200; margin: 0;">Şehir:</h4>
                        <h4 style=" font-weight: 200; margin: 0;"><?= $province ."/".$request['district_name'] ?></h4>
                    </div>
                    <div class="problem" style="display: flex; width: 100%; justify-content: space-around; border-top: 1px solid #000; padding: 15px; align-items: center;">
                        <h4 style=" font-weight: 200; margin: 0;">Sorun:</h4>
                        <h4 style=" font-weight: 200; margin: 0;">Kaza</h4>
                    </div>
                    <div class="plaka" style="min-width: 300px; width: 20%; margin: 25px;">
                        <button id="plaka-btn" style="align-items: center; outline: none; padding: 0; background: #fff; display: flex; border: #000 2px solid; width: 100%; border-radius: 12px; text-decoration: none;">
                            <div class="sol-plaka" style="background: #2626d8; width: 60px; height: 60px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; display: flex; flex-direction: column; justify-content: flex-end; align-items: center;">
                                <img src="<?= public_url('/img/TR.jpg') ?>" alt="" style="width: 20px; height: 10px;">
                                <h3 style="color: #fff; margin: 0;">TR</h3>
                            </div>
                            <div class="ana-plaka" style="display: flex; justify-content: center; align-items: center; width: 100%;">
                                <h1 style="font-size: 35px; color:#000; padding: 0; margin: 0;"><?= $plate ?></h1>
                            </div>
                        </button>
                    </div>
                    <div class="problem-image-text" style="width: 100%; display: flex; border: #000 solid 1px; flex-wrap: wrap; align-items: center; justify-content: center; border-radius: 8px;">
                        <div class="problem-img" style="width: 50%;">
                            <img src="<?= (!$pic) ? public_url('gorsel_yok.jpg') : public_url('../pictures/accident_pic/'. $pic[0]) ?>" alt="" style="max-height:330px;max-width: 330px;width: 100%; border-top-left-radius: 8px; border-bottom-left-radius: 8px;">
                        </div>
                        <div class="problem-text" style="min-width: 300px; width: 50%; height: 20%; padding: 15px;">
                            <h5 style="font-weight: 200;"><?= $request['description'] ?></h5>
                        </div>
                    </div>

                    <div class="contract-confirmation" style="margin-top: 45px;">
                        <h6 style="font-weight: 200;">Bu ilanı oluşturduğunuz zaman <a href="#">kullanıcı sözleşmesini</a> ve bir diğer <a href="#">sözleşmeyi</a> kabul etmiş sayılırsın</h6>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 50px" align="center">
            <button onclick="save_request()" type="button" class="mb-2 btn btn-outline-primary btn-rounded">İsteği Oluştur</button>
        </div>
    </div>


    <!-- page content ends -->
</div>
<?php require "mainPage_statics/footer.php"; ?>
