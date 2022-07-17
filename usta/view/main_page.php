<?php require 'mainPage_statics/header.php'?>
    <div class="main-container">
        <!-- page content start -->
        <div id="changedPart" style="align-items: center;display: flex;flex-direction: column;">
            <div class="bids-settings" style="flex-wrap: wrap; background: darkblue; display: flex; align-items: center; justify-content: center; padding: 25px; width: 80%; border-radius: 12px; /*GÖLGE EKLENECEK*/">
                <a onclick="wallet()" class="swiper-slide text-white" style="cursor:pointer;;width: 33%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">add</span></div>
                    <p style="white-space: nowrap;"><small>Cüzdan'a Para Yükle</small></p>
                </a>
                <a href="withdraw.html" class="swiper-slide text-white" style="width: 33%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">assessment</span></div>
                    <p style="white-space: nowrap;"><small>Hesap Hareketlerini Görüntüle</small></p>
                </a>
            </div>


            <!-- Swiper -->
            <div class="new-bids-button" style="margin-top: 25px;">
                <a onclick="bids()" style="background: #3629B7; border: #3629B7 1px solid;" class="mb-2 btn btn-sm btn-primary">Yeni Teklifler İçin Tıklayın</a>
            </div>
            <div class="haved-bids" style="width: 100%; text-align: center; padding-top: 25px;">
                <h1>Verdiğiniz Son Teklifler</h1>
                <div class="haved-bids-content">
                    <a href="#" class="user-have-bid" style=" text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75);">
                        <div class="user-info-problem-date">
                            <div class="user-info" style="display: flex; align-items: center">
                                <div class="user-img">
                                    <img src="<?= usta_public("img/image5.jpg") ?>" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
                                </div>
                                <div class="user-name">
                                    <h5 style="margin: 0; padding-left: 8px; color: #000000; font-weight: 200;">Asiye Yılmaz</h5>
                                </div>
                            </div>
                            <div class="problem-problem-time" style="text-align: start; margin-left: 48px;">
                                <h6 style="margin: 0; font-size: 15px; color: #000000b6; font-weight: 200;">Kaza</h6>
                                <h6 style="margin: 0; font-size: 12px; color: #000000b6; font-weight: 200;">1.07.2018</h6>
                            </div>
                        </div>
                        <div class="bid" style="border: #000000b6 solid 1px; padding: 5px; border-radius: 8px;">
                            <h5 style="margin: 0; color: #000000b6; font-weight: 200;">45TL</h5>
                        </div>
                    </a>
                    <a href="#" class="user-have-bid" style=" text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75);">
                        <div class="user-info-problem-date">
                            <div class="user-info" style="display: flex; align-items: center">
                                <div class="user-img">
                                    <img src="<?= usta_public("img/image5.jpg") ?>" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
                                </div>
                                <div class="user-name">
                                    <h5 style="margin: 0; padding-left: 8px; color: #000000; font-weight: 200;">Asiye Yılmaz</h5>
                                </div>
                            </div>
                            <div class="problem-problem-time" style="text-align: start; margin-left: 48px;">
                                <h6 style="margin: 0; font-size: 15px; color: #000000b6; font-weight: 200;">Kaza</h6>
                                <h6 style="margin: 0; font-size: 12px; color: #000000b6; font-weight: 200;">1.07.2018</h6>
                            </div>
                        </div>
                        <div class="bid" style="border: #000000b6 solid 1px; padding: 5px; border-radius: 8px;">
                            <h5 style="margin: 0; color: #000000b6; font-weight: 200;">45TL</h5>
                        </div>
                    </a>
                    <a href="#" class="user-have-bid" style=" text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75);">
                        <div class="user-info-problem-date">
                            <div class="user-info" style="display: flex; align-items: center">
                                <div class="user-img">
                                    <img src="<?= usta_public("img/image5.jpg") ?>" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
                                </div>
                                <div class="user-name">
                                    <h5 style="margin: 0; padding-left: 8px; color: #000000; font-weight: 200;">Asiye Yılmaz</h5>
                                </div>
                            </div>
                            <div class="problem-problem-time" style="text-align: start; margin-left: 48px;">
                                <h6 style="margin: 0; font-size: 15px; color: #000000b6; font-weight: 200;">Kaza</h6>
                                <h6 style="margin: 0; font-size: 12px; color: #000000b6; font-weight: 200;">1.07.2018</h6>
                            </div>
                        </div>
                        <div class="bid" style="border: #000000b6 solid 1px; padding: 5px; border-radius: 8px;">
                            <h5 style="margin: 0; color: #000000b6; font-weight: 200;">45TL</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="new-bids" id="new-bids" style="width: 100%; text-align: center; padding-top: 25px;">
                <h1>Yeni Teklifler - <a onclick="myBids()" style="cursor:pointer;text-decoration: none; color: #3629B7;">Tüm Teklifler</a></h1>
                <div class="haved-bids-content">
                    <a href="#" class="user-have-bid new" style="position: relative; text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75);">
                        <div class="user-info-problem-date">
                            <div class="user-info" style="display: flex; align-items: center">
                                <div class="user-img">
                                    <img src="<?= usta_public("img/image5.jpg") ?>" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
                                </div>
                                <div class="user-name">
                                    <h5 style="margin: 0; padding-left: 8px; color: #000000; font-weight: 200;">Asiye Yılmaz</h5>
                                </div>
                            </div>
                            <div class="problem-problem-time" style="text-align: start; margin-left: 48px;">
                                <h6 style="margin: 0; font-size: 15px; color: #000000b6; font-weight: 200;">Kaza</h6>
                                <h6 style="margin: 0; font-size: 12px; color: #000000b6; font-weight: 200;">1.07.2018</h6>
                            </div>
                        </div>

                        <div class="more-information" style="position: absolute; right: 15px; bottom: 5px;">
                            <h6 style="margin: 0; color: #0000006c; font-weight: 200;">Daha Fazla Bilgi İçin Tıklayın..</h6>
                        </div>
                    </a>
                    <a href="#" class="user-have-bid new" style="position: relative; text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75);">
                        <div class="user-info-problem-date">
                            <div class="user-info" style="display: flex; align-items: center">
                                <div class="user-img">
                                    <img src="<?= usta_public("img/image5.jpg") ?>" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
                                </div>
                                <div class="user-name">
                                    <h5 style="margin: 0; padding-left: 8px; color: #000000; font-weight: 200;">Asiye Yılmaz</h5>
                                </div>
                            </div>
                            <div class="problem-problem-time" style="text-align: start; margin-left: 48px;">
                                <h6 style="margin: 0; font-size: 15px; color: #000000b6; font-weight: 200;">Kaza</h6>
                                <h6 style="margin: 0; font-size: 12px; color: #000000b6; font-weight: 200;">1.07.2018</h6>
                            </div>
                        </div>

                        <div class="more-information" style="position: absolute; right: 15px; bottom: 5px;">
                            <h6 style="margin: 0; color: #0000006c; font-weight: 200;">Daha Fazla Bilgi İçin Tıklayın..</h6>
                        </div>
                    </a>
                    <a href="#" class="user-have-bid new" style="position: relative; text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75);">
                        <div class="user-info-problem-date">
                            <div class="user-info" style="display: flex; align-items: center">
                                <div class="user-img">
                                    <img src="<?= usta_public("img/image5.jpg") ?>" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
                                </div>
                                <div class="user-name">
                                    <h5 style="margin: 0; padding-left: 8px; color: #000000; font-weight: 200;">Asiye Yılmaz</h5>
                                </div>
                            </div>
                            <div class="problem-problem-time" style="text-align: start; margin-left: 48px;">
                                <h6 style="margin: 0; font-size: 15px; color: #000000b6; font-weight: 200;">Kaza</h6>
                                <h6 style="margin: 0; font-size: 12px; color: #000000b6; font-weight: 200;">1.07.2018</h6>
                            </div>
                        </div>

                        <div class="more-information" style="position: absolute; right: 15px; bottom: 5px;">
                            <h6 style="margin: 0; color: #0000006c; font-weight: 200;">Daha Fazla Bilgi İçin Tıklayın..</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</main>
<?php require 'mainPage_statics/footer.php'?>