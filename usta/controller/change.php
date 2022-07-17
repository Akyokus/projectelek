<?php

if (post('bid')){
    $result = ' <h1>Yeni İlanlar</h1>
              <div class="user-have-bid" style="flex-direction: column; text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); width: 90%;">
                <div class="user-info-problem-date">
                    <div class="user-info" style="display: flex; align-items: center">
                        <div class="user-img">
                            <img src="'. usta_public("img/image5.jpg") .'" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
                <div class="problem-image-text" style="margin-top: 2%; width: 100%; display: flex; border: #000 solid 1px; flex-wrap: wrap; align-items: center; justify-content: center; border-radius: 8px;">
                    <div class="problem-img" style="width: 50%;">
                        <img src="_img/crashedCar.jpg" alt="" style="width: 100%; border-top-left-radius: 8px; border-bottom-left-radius: 8px;">
                    </div>
                    <div class="problem-text" style="min-width: 300px; width: 50%; height: 20%; padding: 15px;">
                        <h5 style="font-weight: 200;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta iste error illo. Aspernatur, ad hic eius, voluptate ipsa necessitatibus repellendus aut non veritatis doloribus neque pariatur sapiente, officia unde! Rerum, eius! Animi ipsum, voluptate laboriosam distinctio autem ut doloremque, suscipit error aliquam accusamus possimus, saepe facere delectus nisi. Lorem ipsum dolor sit amet.pariatur sapiente, officia unde! Rerum, eius! Animi ipsum, volupta</h5>
                    </div>
                </div>
                <div class="car-info-title-bids" style="display: flex; justify-content: space-between; width: 100%; padding: 20px; margin-top: 2%; padding-bottom: 2%; border-bottom: #000 1px solid; align-items: center;">
                    <div class="part1">
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Modeli: </h3><div style="width: 8px; height: 8px;"></div><h3 style="font-size: 3vw; font-weight: 200;"> Mersedes</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Kilometresi: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 50Km</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Yılı: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 2002</h3></div>
                    </div>
                    <div class="part2">
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Plakası: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 34 TZ 34</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Motor Gücü: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 1.7</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Yakıt Türü: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> Dizel</h3></div>
                    </div>

                </div>
                <div class="input-group mb-3 give-bids" style="width: 100% margin-top: 40px;">
                    <input  type="text" class="form-control" placeholder="Lütfen Teklifinizi Veriniz.." aria-label="">
                    <div style="align-items: center" class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" style="white-space: nowrap;">Teklif ver</button>
                    </div>
                </div>
            </div>
             





    ';
    echo $result;
}

if (post('index')){
    $result = ' <div class="bids-settings" style="flex-wrap: wrap; background: darkblue; display: flex; align-items: center; justify-content: center; padding: 25px; width: 80%; border-radius: 12px; /*GÖLGE EKLENECEK*/">
                <a href="add_money.html" class="swiper-slide text-white" style="width: 33%; display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <div class="icon icon-50 rounded-circle mb-2 bg-white-light"><span class="material-icons">add</span></div>
                    <p style="white-space: nowrap;"><small>Cüzdana Para Yükle</small></p>
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
                                    <img src="'.usta_public("img/image5.jpg").'" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
                                    <img src="'.usta_public("img/image5.jpg").'" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
                                    <img src="'.usta_public("img/image5.jpg").'" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
                                    <img src="'.usta_public("img/image5.jpg").'" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
                                    <img src="'.usta_public("img/image5.jpg").'" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
                                    <img src="'.usta_public("img/image5.jpg").'" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
            </div>';
    echo $result;
}
if (post('wallet')){
    $result = '<a class="btn btn-primary collapsed" style="width: 90%;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Geçmiş İşler
            </a>
            <div class="collapse" id="collapseExample" style="">
                <div class="card card-body">
                    <div class="user-have-bid" style=" text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75);">
                        <div class="user-info-problem-date">
                            <div class="user-info" style="display: flex; align-items: center">
                                <div class="user-img">
                                    <img src="img/image5.jpg" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
                    </div>
                    <div class="user-have-bid" style=" text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75);">
                        <div class="user-info-problem-date">
                            <div class="user-info" style="display: flex; align-items: center">
                                <div class="user-img">
                                    <img src="img/image5.jpg" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
                    </div>
                    <div class="user-have-bid" style=" text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75);">
                        <div class="user-info-problem-date">
                            <div class="user-info" style="display: flex; align-items: center">
                                <div class="user-img">
                                    <img src="img/image5.jpg" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
                    </div>
                </div>
            </div>
            <h1 style="margin-top: 2%;">Para Ekle</h1>
            <div class="add-money" style="display: flex; justify-content: space-around; width: 80%; margin: 2% 0;">
                <label>
                    20 TL
                    <input type="radio" name="add">
                </label>
                <label>
                    60 TL
                    <input type="radio" name="add">
                </label>
                <label>
                    80 TL
                    <input type="radio" name="add">
                </label>
                <label>
                    100TL
                    <input type="radio" name="add">
                </label>
                <label>
                    <input placeholder="Yüklemek İstediğiniz Tutar" type="number" min="10" name=""> TL
                    <input type="radio" name="add">
                </label>
            </div>
            
            <button type="button" class="mb-2 btn btn-success">Ekle</button>
            <h1 style="text-align: center; margin-top: 30px;">Hesap Hareketleri</h1>
            <div class="user-have-bid" style="width: 90%; text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75);">
                <div class="user-info-problem-date">
                    <h4 style="font-weight: 200;">Hesabtan çıkan para:</h4>
                </div>
                <div class="bid" style="border: #000000b6 solid 1px; padding: 5px; border-radius: 8px;">
                    <h5 style="margin: 0; color: #000000b6; font-weight: 200;">45TL</h5>
                </div>
            </div>
            <div class="user-have-bid" style="width: 90%; text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75);">
                <div class="user-info-problem-date">
                    <h4 style="font-weight: 200;">Hesaba giren para:</h4>
                </div>
                <div class="bid" style="border: #000000b6 solid 1px; padding: 5px; border-radius: 8px;">
                    <h5 style="margin: 0; color: #000000b6; font-weight: 200;">45TL</h5>
                </div>
            </div>
            <div class="user-have-bid" style="width: 90%; text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75);">
                <div class="user-info-problem-date">
                    <h4 style="font-weight: 200;">Hesaba giren para:</h4>
                </div>
                <div class="bid" style="border: #000000b6 solid 1px; padding: 5px; border-radius: 8px;">
                    <h5 style="margin: 0; color: #000000b6; font-weight: 200;">45TL</h5>
                </div>
            </div>
            ';
    echo $result;
}
if (post('myBids')){
    $result = ' <h1>Teklif Verdiğim İlanlar</h1>
              <div class="user-have-bid" style="flex-direction: column; text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #fff; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); width: 90%;">
                <div class="user-info-problem-date">
                    <div class="user-info" style="display: flex; align-items: center">
                        <div class="user-img">
                            <img src="'. usta_public("img/image5.jpg") .'" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
                <div class="problem-image-text" style="margin-top: 2%; width: 100%; display: flex; border: #000 solid 1px; flex-wrap: wrap; align-items: center; justify-content: center; border-radius: 8px;">
                    <div class="problem-img" style="width: 50%;">
                        <img src="'.usta_public("_img/crashedCar.jpg").'" alt="" style="width: 100%; border-top-left-radius: 8px; border-bottom-left-radius: 8px;">
                    </div>
                    <div class="problem-text" style="min-width: 300px; width: 50%; height: 20%; padding: 15px;">
                        <h5 style="font-weight: 200;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta iste error illo. Aspernatur, ad hic eius, voluptate ipsa necessitatibus repellendus aut non veritatis doloribus neque pariatur sapiente, officia unde! Rerum, eius! Animi ipsum, voluptate laboriosam distinctio autem ut doloremque, suscipit error aliquam accusamus possimus, saepe facere delectus nisi. Lorem ipsum dolor sit amet.pariatur sapiente, officia unde! Rerum, eius! Animi ipsum, volupta</h5>
                    </div>
                </div>
                <div class="car-info-title-bids" style="display: flex; justify-content: space-between; width: 100%; padding: 20px; margin-top: 2%; padding-bottom: 2%; border-bottom: #000 1px solid; align-items: center;">
                    <div class="part1">
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Modeli: </h3><div style="width: 8px; height: 8px;"></div><h3 style="font-size: 3vw; font-weight: 200;"> Mersedes</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Kilometresi: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 50Km</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Yılı: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 2002</h3></div>
                    </div>
                    <div class="part2">
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Plakası: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 34 TZ 34</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Motor Gücü: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 1.7</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Yakıt Türü: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> Dizel</h3></div>
                    </div>

                </div>
                <div class="input-group mb-3 give-bids" style="width: 100% margin-top: 40px;">
                    <div class="bid" style="border: #000000b6 solid 1px; padding: 5px; border-radius: 8px;width: 100%">
                            <h5 style="text-align: center;margin: 0; color: #000000b6; font-weight: 700;">45TL</h5>
                        </div>
                </div>
                        <h3 class="font-weight-bolder text-center">BEKLEMEDE <br> Lütfen kullanıcının onaylamasını bekleyiniz.</h3>
            </div>
            <div class="user-have-bid" style="flex-direction: column; text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #2bf6b5; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); width: 90%;">
                <div class="user-info-problem-date">
                    <div class="user-info" style="display: flex; align-items: center">
                        <div class="user-img">
                            <img src="'. usta_public("img/image5.jpg") .'" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
                <div class="problem-image-text" style="margin-top: 2%; width: 100%; display: flex; border: #000 solid 1px; flex-wrap: wrap; align-items: center; justify-content: center; border-radius: 8px;">
                    <div class="problem-img" style="width: 50%;">
                        <img src="'.usta_public("_img/crashedCar.jpg").'" alt="" style="width: 100%; border-top-left-radius: 8px; border-bottom-left-radius: 8px;">
                    </div>
                    <div class="problem-text" style="min-width: 300px; width: 50%; height: 20%; padding: 15px;">
                        <h5 style="font-weight: 200;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta iste error illo. Aspernatur, ad hic eius, voluptate ipsa necessitatibus repellendus aut non veritatis doloribus neque pariatur sapiente, officia unde! Rerum, eius! Animi ipsum, voluptate laboriosam distinctio autem ut doloremque, suscipit error aliquam accusamus possimus, saepe facere delectus nisi. Lorem ipsum dolor sit amet.pariatur sapiente, officia unde! Rerum, eius! Animi ipsum, volupta</h5>
                    </div>
                </div>
                <div class="car-info-title-bids" style="display: flex; justify-content: space-between; width: 100%; padding: 20px; margin-top: 2%; padding-bottom: 2%; border-bottom: #000 1px solid; align-items: center;">
                    <div class="part1">
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Modeli: </h3><div style="width: 8px; height: 8px;"></div><h3 style="font-size: 3vw; font-weight: 200;"> Mersedes</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Kilometresi: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 50Km</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Yılı: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 2002</h3></div>
                    </div>
                    <div class="part2">
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Plakası: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 34 TZ 34</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Motor Gücü: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 1.7</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Yakıt Türü: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> Dizel</h3></div>
                    </div>

                </div>
                <div class="input-group mb-3 give-bids text-center" style="width: 100% margin-top: 40px;">
                    <div class="bid" style="border: #000000b6 solid 1px; padding: 5px; border-radius: 8px;width: 100%">
                            <h5 style="text-align: center;margin: 0; color: #000000b6; font-weight: 700;">45TL</h5>
                    </div>
                    
                </div>
                <h3 class="font-weight-bolder text-center">ONAYLANDI <br> Lütfen kullanıcı ile iletişime geçiniz.</h3>
            </div>
             <div class="user-have-bid" style="flex-direction: column; text-decoration: none; display: flex; justify-content: space-between; align-items: flex-start; background: #f06363c4; border-radius: 15px; padding: 25px; margin: 50px 45px; align-items: center; -webkit-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); box-shadow: 0px 0px 72px -41px rgba(0,0,0,0.75); width: 90%;">
                <div class="user-info-problem-date">
                    <div class="user-info" style="display: flex; align-items: center">
                        <div class="user-img">
                            <img src="'. usta_public("img/image5.jpg") . '" alt="" style="width: 40px; height: 40px; border-radius: 100%;">
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
                <div class="problem-image-text" style="margin-top: 2%; width: 100%; display: flex; border: #000 solid 1px; flex-wrap: wrap; align-items: center; justify-content: center; border-radius: 8px;">
                    <div class="problem-img" style="width: 50%;">
                        <img src="'.usta_public("_img/crashedCar.jpg").'" alt="" style="width: 100%; border-top-left-radius: 8px; border-bottom-left-radius: 8px;">
                    </div>
                    <div class="problem-text" style="min-width: 300px; width: 50%; height: 20%; padding: 15px;">
                        <h5 style="font-weight: 200;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta iste error illo. Aspernatur, ad hic eius, voluptate ipsa necessitatibus repellendus aut non veritatis doloribus neque pariatur sapiente, officia unde! Rerum, eius! Animi ipsum, voluptate laboriosam distinctio autem ut doloremque, suscipit error aliquam accusamus possimus, saepe facere delectus nisi. Lorem ipsum dolor sit amet.pariatur sapiente, officia unde! Rerum, eius! Animi ipsum, volupta</h5>
                    </div>
                </div>
                <div class="car-info-title-bids" style="display: flex; justify-content: space-between; width: 100%; padding: 20px; margin-top: 2%; padding-bottom: 2%; border-bottom: #000 1px solid; align-items: center;">
                    <div class="part1">
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Modeli: </h3><div style="width: 8px; height: 8px;"></div><h3 style="font-size: 3vw; font-weight: 200;"> Mersedes</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Kilometresi: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 50Km</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Yılı: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 2002</h3></div>
                    </div>
                    <div class="part2">
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Plakası: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 34 TZ 34</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Motor Gücü: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> 1.7</h3></div>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; font-size: 3vw;">Aracın Yakıt Türü: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-size: 3vw; font-weight: 200;"> Dizel</h3></div>
                    </div>

                </div>
                
                <div id="bidButton">
                <div class="input-group mb-3 give-bids" style="width: 100% margin-top: 40px;">
                    <div class="bid" style="border: #000000b6 solid 1px; padding: 5px; border-radius: 8px;width: 100%">
                            <h5 style="text-align: center;margin: 0; color: #000000b6; font-weight: 700;">45TL</h5>
                        </div>
                </div>
                 <div style="align-items: center" class="input-group-append">
                        <button onclick="setBid(4)" class="btn btn-outline-secondary" type="button" style="background-color: #f6d9d9;white-space: nowrap;width: 100%">Yeniden Teklif ver</button>
                 </div>
                </div>
                
            </div>





    ';
    echo $result;
}
if (post('setBid')){
    $result = '<div class="input-group mb-3 give-bids" style="width: 100% margin-top: 40px;">
                    <input  type="text" class="form-control" placeholder="Lütfen Teklifinizi Veriniz.." aria-label="">
                    <div style="align-items: center" class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" style="white-space: nowrap;">Teklif ver</button>
                    </div>
                </div>';
    echo $result;
}
if (post('profile')){
    $result = '<div class="container-fluid px-0">
            <div class="card overflow-hidden">
                <div class="card-body p-0 h-150">
                    <div class="background">
                        <img src="'.usta_public('_img/image10.jpg').'" alt="" style="display: none;">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid top-70 text-center mb-4">
            <div class="avatar avatar-140 rounded-circle mx-auto shadow">
                <div class="background" style="">
                    <img src="'.usta_public('img/user_icon.png').'" alt="">
                </div>
            </div>
        </div>

        <div class="container mb-4 text-center text-dark font-weight-bolder">
            <h6 class="mb-1">Ahmet Yılmaz</h6>
            <p>İstanbul, Türkiye</p>
            <p class="mb-1">Ahmet_Yılmaz@hotmail.com</p>
            <p>0527 000 0000</p>
        </div>

        <div class="main-container" style="text-align: center;">
            <div class="repairman-information" style="display: flex; justify-content: space-around; width: 100%; padding: 20px; margin-top: 2%; padding-bottom: 2%; align-items: center;">
                <div class="part1" style="width: 50%;">
                    <div class="store-name" style="display: flex; flex-direction: column; align-items: center; margin-bottom: 15%;">
                        <i class="material-icons" style="background: rgba(90, 180, 0, 0.555); padding: 25px; border-radius: 100%; font-size: 60px; color: rgb(87, 173, 0); margin-bottom: 2%;">store</i>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; white-space: nowrap;">Dükkan Adı: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-weight: 200; white-space: nowrap;"> Sanayi Tamircisi</h3></div>
                    </div>
                    <div class="store-adress" style="display: flex; flex-direction: column; align-items: center;">
                        <span style="background: rgb(235, 133, 0, 0.555); padding: 25px; border-radius: 100%; color: rgb(235, 133, 0); margin-bottom: 2%;"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-signpost-split" viewBox="0 0 16 16">
                            <path d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z"/>
                          </svg></span>
                        <div class="model" style="display: flex;"><h3 style="color: #000; font-weight: 200; white-space: nowrap;">Dükkan Adresi: </h3><div style="width: 8px; height: 8px;"></div><h3 style="white-space: nowrap; font-weight: 200;"> Sanayi Mah. Esenler/İstanbul</h3></div>
                    </div>
                </div>
                <div class="part2" style="width: 50%;">
                    <div class="point" style="display: flex; flex-direction: column; align-items: center; margin-bottom: 15%;">
                        <i class="material-icons" style="background: rgb(238, 255, 0, 0.555); padding: 25px; border-radius: 100%; font-size: 60px; color: rgb(205, 219, 0); margin-bottom: 2%;">star</i>
                        <div style="display: flex;"><h3 style="color: #000; font-weight: 200; white-space: nowrap;">Puan: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" font-weight: 200; white-space: nowrap;"> 4.6</h3></div>
                    </div>
                    <div class="work-number" style="display: flex; flex-direction: column; align-items: center;">
                    <i class="material-icons" style="background: #1a74db7e; padding: 25px; border-radius: 100%; font-size: 60px; color: #1a74db; margin-bottom: 2%;">work</i>
                        <div class="numberW" style="display: flex;"><h3 style="color: #000; font-weight: 200; white-space: nowrap;">Yaptığı İş Sayısı: </h3><div style="width: 8px; height: 8px;"></div><h3 style=" white-space: nowrap; font-weight: 200;"> 98</h3></div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary rounded m-2" data-toggle="modal" data-target="#exampleModalScrollable">
                Düzenle
            </button>
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3 style="font-weight: 200; margin-bottom: 10px;">Yeni Dükkan Adı <input type="text" style="border-radius: 160px; border: #000 solid 1px;"></h3>
                            <h3 style="font-weight: 200; margin-bottom: 10px;">Yeni Dükkan Adresi <input type="text" style="border-radius: 160px; border: #000 solid 1px;"></h3>
                            <h3 style="font-weight: 200;">Yeni Telefon Numarası <input type="text" style="border-radius: 160px; border: #000 solid 1px;"></h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Çık</button>
                            <button type="button" class="btn btn-primary">Değişiklikleri Kaydet</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    echo $result;
}