<?php require "mainPage_statics/header.php"?>
<div id="changed_part">
    <main class="row">
        <div>
            <div id="section1" style="margin-bottom: 10rem;" class="container row d-flex justify-content-xl-center">
                <div class="card text-white col-xl-8 col-12"
                     style="color: #203757 !important; border: none; padding-top: 10rem;">
                    <div class="card-body" style="margin-left: 0;">
                        <h4 class="card-title row" style="font-size: 3rem; font-weight: bold;">Kolayca ilan oluştur.
                            <br>En uygun teklifi seç.
                        </h4>
                        <p class="card-text row">En uygun teklifi seçerek aracını en uygun fiyata tamir et.
                        </p>
                        <div class="row">
                            <div class="col-md-7 col-12  p-0">
                                <div class="row" style="position: relative;">
                                    <div id="input" class="d-flex align-items-center"
                                         style="padding: 0; padding-left: 1rem;">
                                        <div class="col-md-10 col-9 d-flex align-items-center">
                                            <i class="fas fa-search" style="opacity: 0.4;"></i>
                                            <input value="" id="autoComplate" onkeydown="complate()" type="search" class="form-control" placeholder="Problem Ara"
                                                   aria-label="Search" aria-describedby="search-addon" />
                                        </div>
                                        <a onclick="" id="selectService" class="btn btn-danger col-md-2 col-3"
                                           style="padding: 0.5rem; background-color: #e83c79; font-weight: 600;">GİT</a>
                                    </div>
                                    <div  class="autocomplete-items"
                                         style="padding: 0; display: none;">
                                        <div id="autoComplete" style="max-height: 300px; overflow-y: scroll;">
                                            <button class="list-group-item list-group-item-action">
                                                <span><strong>Brake System Diagnosis</strong></span>
                                                <span>Diagnosis</span>
                                            </button>
                                        </div>
                                        <button class="list-group-item btn btn-link rounded-0 w-100 justify-content-center" style="color: #fff; font-weight: 600; background-color: #e83c79; border-radius: 0px 0px 10px 10px !important;">Tüm Servisleri
                                            Gör</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="section2" class="bg-light border-top border-bottom d-flex flex-column align-items-center"
                 style="padding-top: 5rem; padding-bottom: 5rem; color: #203757 !important; width: 100%; box-sizing: border-box;">

                <h3 style="margin-bottom: 3rem; font-weight: bolder;">Sorun Kategorileri</h3>
                <div class="row d-flex w-100 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-7 col-10" style="border-right: 1px solid rgba(153, 153, 153, 0.459); padding: 0 3rem;">
                        <ul>
                            <?php for ($i=0;$i<count($services)/3;$i++): ?>
                                <li onclick="create_request(<?= $services[$i]['id'] ?>)" id="<?= $services[$i]['id'] ?>"><i class="fab fa-500px fa-2x"></i><a ><?= $services[$i]['sname'] ?></a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-7 col-10" style="border-right: 1px solid rgba(153, 153, 153, 0.459); padding: 0 3rem;">
                        <ul>
                            <?php for ($i=(count($services)/3)+1;$i<count($services)*2/3+1;$i++): ?>
                                <li onclick="create_request(<?= $services[$i]['id'] ?>)" id="<?= $services[$i]['id'] ?>"><i class="fab fa-500px fa-2x"></i><a ><?= $services[$i]['sname'] ?></a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-7 col-10" style="padding: 0 3rem;">
                        <ul>
                            <?php for ($i=(count($services)-(count($services)/3))+1;$i<count($services);$i++): ?>
                                <li onclick="create_request(<?= $services[$i]['id'] ?>)" id="<?= $services[$i]['id'] ?>"><i class="fab fa-500px fa-2x"></i><a ><?= $services[$i]['sname'] ?></a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="section3" class="container d-flex flex-column justify-content-center align-items-center py-5"
                 style="color: #203757; font-weight: 900;">
                <h1>Elek kullanıcıları ne diyor ?</h1>
                <div id="cards" class="d-flex flex-lg-row flex-column justify-content-lg-evenly py-5">
                    <div class="card w-25">
                        <div class="card-body">
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="card-title pt-4 comments"> laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. cillum dolore eu fugiat nulla pariatur.
                            </h4>
                            <div class="d-flex align-items-center pt-4">
                                <img src="img/x1.jpg" width="50px" class="rounded-circle" alt="">
                                <span style="margin-left: 1rem;">
                                        <p style="padding: 0; margin: 0;">Ekrem Koçak</p>
                                        <p style="padding: 0; margin: 0;"><a href="">Yorumu Oku</a></p>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="card w-25">
                        <div class="card-body">
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="card-title pt-4 comments">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco.
                            </h4>
                            <div class="d-flex align-items-center pt-4">
                                <img src="img/x1.jpg" width="50px" class="rounded-circle" alt="">
                                <span style="margin-left: 1rem;">
                                        <p style="padding: 0; margin: 0;">Ekrem Koçak</p>
                                        <p style="padding: 0; margin: 0;"><a href="">Yorumu Oku</a></p>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="card w-25">
                        <div class="card-body">
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="card-title pt-4 comments">laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. cillum dolore eu fugiat nulla pariatur.
                            </h4>
                            <div class="d-flex align-items-center pt-4">
                                <img src="img/x1.jpg" width="50px" class="rounded-circle" alt="">
                                <span style="margin-left: 1rem;">
                                        <p style="padding: 0; margin: 0;">Ekrem Koçak</p>
                                        <p style="padding: 0; margin: 0;"><a href="">Yorumu Oku</a></p>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
</div>


<?php require 'mainPage_statics/footer.php' ?>

