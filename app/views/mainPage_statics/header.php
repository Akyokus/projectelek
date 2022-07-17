<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proje Elek</title>
    <!-- Css -->
    <link rel="stylesheet" href="<?= public_url('style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="<?= public_url('sweet.css') ?>">
    <!-- fontawasome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <!-- font family -->
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/metropolis" type="text/css" />
    <link rel="icon" href="<?= public_url('img/sports-car.png') ?>" type="image/x-icon" />
</head>

<body >
<div class="sagalt">
    <a style="color: #009ed5;" href=""><i class="fas fa-comment-dots fa-2x"></i></a>
</div>
<?php if (!session('user_id')): ?>

<div class="buttonekrani" style=" z-index: 10000000; background-color: #fff; font-size: 1.3rem; padding-left: 2rem; padding-top: 3rem; display: none; width: 100%; position: relative;">
    <div class="d-flex flex-column w-75" style="position: relative;">
        <button class="btn ekrem" style="width: 80px; position: absolute; right: 0;"><i class="far fa-times-circle fa-2x"></i></button>
        <button style="text-align: left; color: #009ed5;" class="btn w-50">Basında Biz</button>
        <button style="text-align: left; color: #009ed5; border: 1px solid #888;" onclick="login()" class="btn ">Giriş Yap</button>
        <button style="text-align: left; color: #fff; background-color: #e83c79;" class="btn ">Kayıt Ol</button>
    </div>
</div>
<?php else: ?>
    <div class="sagalt">
        <a style="color: #009ed5;" href=""><i class="fas fa-comment-dots fa-2x"></i></a>
    </div>

    <div class="buttonekrani"
         style=" z-index: 10000000; background-color: #fff; font-size: 1.3rem; padding-left: 3rem; padding-top: 3rem; display: none; width: 100%; height: 100vh; position: relative;">
        <div class="d-flex flex-column w-75" style="position: relative;">
            <button class="btn ekrem" style="width: 80px; position: absolute; right: 0;"><i class="far fa-times-circle fa-2x"></i></button>
            <button style="text-align: left; color: #009ed5;" class="btn w-50"><?= session('user_name') ?></button>
            <button onclick="profile()" style="text-align: left; color: #009ed5; border: 1px solid #888;" class="btn ">
                <i class="fas fa-user-circle"></i>Profil
            </button>
            <button onclick="garage()" style="text-align: left; color: #009ed5; border: 1px solid #888;" class="btn ">
                <i class="fas fa-warehouse"></i>Garajım
            </button>
            <button style="text-align: left; color: #009ed5; border: 1px solid #888;" class="btn ">
                <i onclick="requests()" class="fas fa-car-crash"></i>İlanlarım
            </button>
            <button onclick="logout()" style="text-align: left; color: #fff; background-color: #e83c79;" class="btn ">
                <i class="fas fa-sign-out-alt"></i>Çıkış Yap
            </button>
        </div>
    </div>
<?php endif; ?>
<div class="hersey" style="box-sizing: border-box; overflow: hidden;">
    <nav class="navbar sticky-top row d-flex align-items-center justify-content-between p-4"
         style="z-index: 10000; background-color: #fff; position: relative; box-sizing: border-box;">

        <div style="display: none;" class="col-1 buttonss">
            <button class="btn btn-light"><i class="fas fa-bars"></i></button>
        </div>
        <div id="icon" class="col-lg-6 col-sm-12 col-8 iconn">
            <div class="row">
                <a href="" class="text-dark d-flex align-items-center col-lg-3 col-5"
                   style="color: rgba(51,51,51,.9) !important;">
                    <i class="fas fa-car "
                       style="font-size: 2rem; color: rgba(51,51,51,.9) !important; margin-right: 0.5rem;"></i><span
                            style="font-weight: 400;">EHLİ</span>
                </a>
                <!--
                <div class="inputE d-flex align-items-center col-lg-7"
                     style="padding: 0; padding-left: 1rem; font-size: 0.5rem !important;">
                    <div class="col-md-10 col-9 d-flex align-items-center">
                        <i class="fas fa-search" style="opacity: 0.4; font-size: 1rem;"></i>
                        <input  type="search" class="form-control" placeholder="Problem Ara" aria-label="Search"
                               aria-describedby="search-addon" />
                    </div>
                    <a href="services.html" class="btn btn-danger col-md-2 col-3"
                       style="padding: 0.5rem; background-color: #e83c79; font-weight: 600; font-size: 0.7rem;">ARA</a>
                </div>
                -->
            </div>
        </div>
        <?php if (session('user_id')): ?>
        <div id="links" class="col-lg-5">
            <ul class="d-flex justify-content-end">
                <li><a onclick="requests()"><i class="fas fa-car-crash"></i> İlanlarım</a></li>
                <li><a onclick="garage()" href="#"><i class="fas fa-warehouse"></i> Garajım</a></li>
                <li><a onclick="profile()"><?= session('user_name') ?><a href=""></a></li>
            </ul>
        </div>
            <div id="garage" class="col-1" style="display: none;">
                <a href="" style="color: rgba(51,51,51,.9) !important;"><i class="fas fa-warehouse"></i></a>
            </div>
        <?php else: ?>
            <div id="links" class="col-lg-5">
                <ul class="d-flex justify-content-end">
                    <li><a href="<?= site_url('') ?>">Basında Biz</a></li>
                    <li><a onclick="login()">Giriş Yap</a></li>
                    <li><a onclick="registe()">Kayıt Ol</a></li>
                </ul>
            </div>
            <div id="garage" class="col-1" style="display: none;">
                <a href="" style="color: rgba(51,51,51,.9) !important;"><i class="fas fa-warehouse"></i></a>
            </div>
        <?php endif; ?>

    </nav>
