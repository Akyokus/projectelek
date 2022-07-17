<?php require "statics/header.php"; ?>
<div class="loginChangePart">




    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
        <header class="header">
            <div class="row">
                <div class="col-auto px-0">

                </div>
                <div class="text-left col align-self-center">

                </div>
            </div>
        </header>

        <form action="<?= usta_url('login') ?>" method="post">
        <div class="container h-100 text-white">
            <div class="row h-100">
                <div class="col-12 align-self-center mb-4">
                    <div class="row justify-content-center">
                        <div class="col-11 col-sm-7 col-md-6 col-lg-5 col-xl-4">
                            <h2 class="font-weight-normal mb-5">Usta hesabın ile<br>Giriş Yap</h2>
                            <div class="form-group float-label active">
                                <input name="email" type="text" class="form-control text-white">
                                <label class="form-control-label text-white">E-posta</label>
                            </div>
                            <div class="form-group float-label position-relative">
                                <input name="password" type="password" class="form-control text-white ">
                                <label class="form-control-label text-white">Şifre</label>
                            </div>
                  <!--          <p class="text-right"><a href="forgot_password.html" class="text-white">Şifremi Unuttum</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer no-bg-shadow py-3">
            <div class="row justify-content-center">
                <div class="col">
                    <button name="login" value="1" class="btn btn-default rounded btn-block">Giriş Yap</button>
                </div>
            </div>
        </div>
        </form>
    </main>

    <!-- footer-->
<?php if ($res === "Başarıyla Giriş Yaptınız. Yönlendiriliyorsunuz."): ?>
    <?php header("Location:".usta_url('main_page')); ?>
    <script>alert(<?= $res ?>)</script>

<?php else: ?>
    <script>alert("<?= $res ?>")</script>
<?php endif; ?>

</div>
<?php require "statics/footer.php"; ?>