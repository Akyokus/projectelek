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
            <div class="form-group">
                <label>Şehir Seçiniz<label style="color: red">(Zorunlu Alan)</label></label>



                <select required class="form-control form-control-lg" id="Iller">
                    <option>Lütfen Bir İl Seçiniz</option>
                </select>
                <select required class="form-control form-control-lg" id="Ilceler" disabled="disabled">
                    <option>Lütfen Önce bir İl seçiniz</option>
                </select>
            </div>


        </div>
    </div>
    <div style="margin-top: 50px" align="center">
        <button onclick="district_next()" type="button" class="mb-2 btn btn-outline-primary btn-rounded">Devam Et</button>
    </div>
</div>


    <!-- page content ends -->
</div>
<?php require "mainPage_statics/footer.php"; ?>
