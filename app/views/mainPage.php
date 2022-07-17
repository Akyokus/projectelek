<?php require "mainPage_statics/header.php"; ?>
<div id="changedPart">


    <div class="container">
        <div class="card bg-template shadow mt-4 h-190">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <figure class="avatar avatar-60"><img src="<?= public_url('img/user_icon3.png') ?>" alt=""></figure>
                    </div>
                    <div class="col pl-0 align-self-center">
                        <h5 class="mb-1"><?= session("user_name") ?></h5>
                        <p class="text-mute small">Türkiye</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div style="margin-top: 20px" class="row">
            <div class="swiper-container icon-slide mb-4">
                <div class="swiper-wrapper">
                    <a onclick="profile()" id="profile" class="swiper-slide text-center" data-toggle="modal" data-target="#paymodal">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons text-template">account_circle</i>
                        </div>
                        <p class="small mt-2">Hesabım</p>
                    </a>
                    <a onclick="myads()" class="swiper-slide text-center" data-toggle="modal" data-target="#bookmodal">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons text-template">spa</i>
                        </div>
                        <p class="small mt-2">İlanlarım</p>
                    </a>
                    <a onclick="garage()" id="garage" class="swiper-slide text-center">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons text-template">directions_car</i>
                        </div>
                        <p class="small mt-2">Araçlarım</p>
                    </a>
                </div>

            </div>
        </div>
<!--
        <div class="row mb-2">
            <div class="container px-0">

                <div class="swiper-container two-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <div class="col">
                                            <p>350 TL<br><small class="text-secondary">HESAP BAKİYESİ</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <div class="col">
                                            <p>350 TL<br><small class="text-secondary">HARCANABİLİR</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <div class="col">
                                            <p>840 TL<br><small class="text-secondary">Parça Değişimi</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <div class="col">
                                            <p>365 TL<br><small class="text-secondary">Araç Tamiri</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <div class="col">
                                            <p>12 TL<br><small class="text-secondary">Komisyon Bedeli</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row no-gutters h-100">
                                        <div class="col">
                                            <p>541 TL<br><small class="text-secondary">Araç Bakımı</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
-->
        <!-- Swiper
        <div class="row">
            <div class="container px-0">

                <div class="swiper-container offer-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card shadow border-0 bg-template">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto pr-0">
                                            <img src="img/graphics-carousel-scheme1.png" alt="" class="mw-100">
                                        </div>
                                        <div class="col align-self-center">
                                            <h5 class="mb-2 font-weight-normal">Gold ÜYELİK AVANTAJLARI</h5>
                                            <p class="text-mute">Gold üyenin size sunduğu avantajlar...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card shadow border-0 bg-template">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col pr-0 align-self-center">
                                            <h5 class="mb-2 font-weight-normal">Gold üye ol</h5>
                                            <p class="text-mute">Hemen gold üye olun ve ayrıcalıklardan faydalanın.</p>
                                        </div>
                                        <div class="col-auto">
                                            <img src="img/graphics-carousel-scheme1.png" alt="" class="mw-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        -->
    </div>

    <div class="container">
        <h3  class="text-center">Nasıl Yardımcı Olabiliriz ? </h3>
        <div class="row">
            <!-- Swiper -->
            <div class="swiper-container news-slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div onclick="headRequest()" class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="<?= public_url('img/kaza.png') ?>" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="">Kaza Destek Hizmetleri</h5>
                                <p class="text-mute small"></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="headRequest()" class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="<?= public_url('img/bakim.png') ?>" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="">Bakım Hizmetleri</h5>
                                <p class="text-mute small"></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="headRequest()" class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="<?= public_url('img/repair.png') ?>" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="">Tamir Hizmetleri</h5>
                                <p class="text-mute small"></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div onclick="headRequest()" class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="<?= public_url('img/cekici.png') ?>" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="">Anında Çekici Hizmeti</h5>
                                <p class="text-mute small"></p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 bg-dark text-white">
                            <figure class="background">
                                <img src="<?= public_url('img/ques.png') ?>" alt="">
                            </figure>
                            <div class="card-body">
                                <a href="#" class="btn btn-default btn-rounded-36 shadow-sm float-bottom-right"><i class="material-icons md-18">arrow_forward</i></a>
                                <h5 class="">Bilene Sor</h5>
                                <p class="text-mute small"></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="text-center">Uygulamayı Kullanan Son 5 Mutlu Müşterimiz</h3>


        <div class="card shadow border-0 mb-3">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <img src="<?= public_url('img/user2.png') ?>" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="font-weight-normal mb-1">S**** D****</h6>
                        <p class="text-mute small text-secondary">Trafik Kazası</p>
                        <p class="text-mute small text-secondary">1/04/2021 13:49</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow border-0 mb-3">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <img src="<?= public_url('img/user3.png') ?>" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="font-weight-normal mb-1">A**** F****</h6>
                        <p class="text-mute small text-secondary">Trafik Kazası</p>
                        <p class="text-mute small text-secondary">1/04/2021 13:49</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow border-0 mb-3">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <img src="<?= public_url('img/user1.png') ?>" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="font-weight-normal mb-1">T**** D****</h6>
                        <p class="text-mute small text-secondary">Çekici Hizmeti</p>
                        <p class="text-mute small text-secondary">1/04/2021 13:49</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow border-0 mb-3">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <img src="<?= public_url('img/user4.png') ?>" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="font-weight-normal mb-1">M**** A****</h6>
                        <p class="text-mute small text-secondary">Araç Bakım</p>
                        <p class="text-mute small text-secondary">1/04/2021 13:49</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow border-0 mb-3">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto pr-0">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <img src="<?= public_url('img/user4.png') ?>" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="font-weight-normal mb-1">S**** T****</h6>
                        <p class="text-mute small text-secondary">Tamir Hizmeti</p>
                        <p class="text-mute small text-secondary">1/04/2021 13:49</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- page content here -->

        <h3 class="text-center">Biz Kimiz ?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non eleifend sem, eget laoreet quam. In lobortis urna a luctus vestibulum. Nulla eget ipsum in dolor sollicitudin sollicitudin in eget ipsum. Ut vitae ante lectus. Sed ligula felis, dapibus in finibus eu, posuere sagittis erat. Nullam mattis hendrerit fermentum. Ut interdum aliquet interdum.

            Suspendisse potenti. Quisque ac neque dui. Fusce euismod orci non ante elementum facilisis. Integer vitae tempor nunc, eget maximus nunc. Nullam mattis consectetur lacus, sit amet sagittis odio tristique scelerisque. Aliquam iaculis, est eget scelerisque viverra, magna ligula tempor leo, ut elementum erat urna non eros. Phasellus feugiat id purus suscipit finibus. Aenean volutpat ullamcorper massa, a posuere turpis consequat ac. Mauris tincidunt risus non neque volutpat condimentum. In suscipit nisl arcu. Cras sit amet dolor maximus, fringilla turpis eu, viverra risus. Duis luctus velit augue, at laoreet dolor sodales a. Ut et placerat nisl. Vestibulum consectetur in dolor non eleifend.

            Pellentesque ullamcorper ac augue lobortis lobortis. Donec vehicula maximus bibendum. Nunc consectetur maximus est eget imperdiet. Donec vehicula egestas bibendum. Sed a venenatis tortor, sed convallis orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nisl justo, finibus eget dolor ac, consequat feugiat ante. Aenean sed vulputate lectus. Nunc pretium eleifend elit nec porta. Duis pulvinar vel erat et convallis.

            Phasellus laoreet finibus egestas. Curabitur vel ipsum vitae nisl iaculis tristique sit amet sed enim. Suspendisse dolor ipsum, scelerisque accumsan semper tristique, blandit a metus. Aliquam id mauris vulputate nibh consequat auctor eget quis turpis. Maecenas sed egestas dui. Aenean vitae turpis felis. Suspendisse nec enim eget nulla ultrices consequat eu vel ex. Phasellus vel nisl maximus risus pharetra</p>
        <br>
        <div class="row">
            <div class="container px-0">
                <!-- Swiper
                <div class="swiper-container offer-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card shadow border-0 bg-template">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto pr-0">
                                            <img src="img/graphics-carousel-scheme1.png" alt="" class="mw-100">
                                        </div>
                                        <div class="col align-self-center">
                                            <h5 class="mb-2 font-weight-normal">Gold loan scheme</h5>
                                            <p class="text-mute">Get all money at market rate of gold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card shadow border-0 bg-template">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col pr-0 align-self-center">
                                            <h5 class="mb-2 font-weight-normal">Gold loan scheme</h5>
                                            <p class="text-mute">Get all money at market rate of gold</p>
                                        </div>
                                        <div class="col-auto">
                                            <img src="img/graphics-carousel-scheme1.png" alt="" class="mw-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                -->
            </div>
        </div>
        <br>
        <h3 class="text-center">Uygulama Nasıl Çalışır ?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non eleifend sem, eget laoreet quam. In lobortis urna a luctus vestibulum. Nulla eget ipsum in dolor sollicitudin sollicitudin in eget ipsum. Ut vitae ante lectus. Sed ligula felis, dapibus in finibus eu, posuere sagittis erat. Nullam mattis hendrerit fermentum. Ut interdum aliquet interdum.            Suspendisse potenti. Quisque ac neque dui. Fusce euismod orci non ante elementum facilisis. Integer vitae tempor nunc, eget maximus nunc. Nullam mattis consectetur lacus, sit amet sagittis odio tristique scelerisque. Aliquam iaculis, est eget scelerisque viverra, magna ligula tempor leo, ut elementum erat urna non eros. Phasellus feugiat id purus suscipit finibus. Aenean volutpat ullamcorper massa, a posuere turpis consequat ac. Mauris tincidunt risus non neque volutpat condimentum. In suscipit nisl arcu. Cras sit amet dolor maximus, fringilla turpis eu, viverra risus. Duis luctus velit augue, at laoreet dolor sodales a. Ut et placerat nisl. Vestibulum consectetur in dolor non eleifend.

            Pellentesque ullamcorper ac augue lobortis lobortis. Donec vehicula maximus bibendum. Nunc consectetur maximus est eget imperdiet. Donec vehicula egestas bibendum. Sed a venenatis tortor, sed convallis orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nisl justo, finibus eget dolor ac, consequat feugiat ante. Aenean sed vulputate lectus. Nunc pretium eleifend elit nec porta. Duis pulvinar vel erat et convallis.

            Phasellus laoreet finibus egestas. Curabitur vel ipsum vitae nisl iaculis tristique sit amet sed enim. Suspendisse dolor ipsum, scelerisque accumsan semper tristique, blandit a metus. Aliquam id mauris vulputate nibh consequat auctor eget quis turpis. Maecenas sed egestas dui. Aenean vitae turpis felis. Suspendisse nec enim eget nulla ultrices consequat eu vel ex. Phasellus vel nisl maximus risus pharetra</p>


        <br>
    </div>



    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="text-center">Müşteri Memnuniyeti</h3>
                <p class="text-secondary"></p>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-6 col-md-3">
                <div class="card shadow border-0 mb-3">
                    <div class="card-body">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons vm md-36 text-template">card_giftcard</i>
                        </div>
                        <h3 class="mt-3 mb-0 font-weight-normal">254</h3>
                        <p class="text-secondary text-mute small">Memnun müşteri</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow border-0 mb-3">
                    <div class="card-body">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons vm md-36 text-template">subscriptions</i>
                        </div>
                        <h3 class="mt-3 mb-0 font-weight-normal">1250</h3>
                        <p class="text-secondary text-mute small">Takipçi</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow border-0 mb-3">
                    <div class="card-body">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons vm md-36 text-template">local_florist</i>
                        </div>
                        <h3 class="mt-3 mb-0 font-weight-normal">1542</h3>
                        <p class="text-secondary text-mute small">Tamirci</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card shadow border-0 mb-3">
                    <div class="card-body">
                        <div class="avatar avatar-60 no-shadow border-0">
                            <div class="overlay bg-template"></div>
                            <i class="material-icons vm md-36 text-template">location_city</i>
                        </div>
                        <h3 class="mt-3 mb-0 font-weight-normal">1890</h3>
                        <p class="text-secondary text-mute small">Araç tamir hizmeti</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
<?php require "mainPage_statics/footer.php"; ?>
