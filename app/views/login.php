<?php require "statics/header.php"; ?>
    <div class="wrapper">

        <!-- header -->
        <div class="header">
            <div class="row no-gutters">
                <div class="col-auto">
                    <a href="<?= site_url('intro') ?>" class="btn  btn-link text-dark"><i class="material-icons">chevron_left</i></a>
                </div>
                <div class="col text-center"></div>
                <div class="col-auto">
                </div>
            </div>
        </div>
        <!-- header ends -->
        <form method="post" action="<?= site_url('login') ?>" class="form-signin mt-3 ">
        <div class="row no-gutters login-row">
            <div class="col align-self-center px-3 text-center">
                <h2>Giriş Yap</h2>

                    <div class="form-group">
                        <input name="uname" type="email" id="inputEmail" class="form-control form-control-lg text-center" placeholder="Email Adresiniz" required autofocus>
                    </div>

                    <div class="form-group">
                        <input name="password" type="password" id="inputPassword" class="form-control form-control-lg text-center" placeholder="Şifreniz" required>
                    </div>


                    <a href="forgot-password.html" class="mt-4 d-block">Şifrenizimi Unuttunuz</a>


            </div>

        </div>

        <!-- login buttons -->
        <div class="row mx-0 bottom-button-container">
            <div class="col">
                <button name="submit" value="1" class="btn btn-default btn-lg btn-rounded shadow btn-block">GİRİŞ YAP</button>
            </div>
        </div>
        </form>
        <!-- login buttons -->
    </div>
<?php if ($res): ?>
    <script>alert("<?= $res ?>")</script>
    <?php header("Refresh: 1; url=".site_url("page")); ?>
<?php endif; ?>

<?php require "statics/footer.php"; ?>