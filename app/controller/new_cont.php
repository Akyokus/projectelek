<?php
$crawler = $client->request('GET', $temp['url']);//giriş sayfasına gidiyorum
$status_code = $client->getResponse();// giriş sayfası yüklendi mi surum kodunu alıyorum

//$link = $crawler->filter('a[class="product-image "]')->eq($i)->attr('href');

//$foto = $crawler->filter('img[class="rsImg rsMainSlideImage"]')->attr('src')->text();
//$foto = $crawler->filter('.sMainSlideImage')->text();
$link2 = $crawler->filter('img[class="owl-item active"]')->text();
$metin=$crawler->text(); // bütün sayfayı metin olarak değişkene attım
echo $link2;
exit();


require view("new");