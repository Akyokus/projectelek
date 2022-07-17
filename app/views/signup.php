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
    <form method="post" action="<?= site_url("sign-up") ?>" class="form-signin mt-3 ">
    <div class="row no-gutters login-row">
        <div class="col align-self-center px-3 text-center">
            <br>
            <h2>KAYIT OL</h2>

                <div class="form-group">
                    <input name="uname" type="text" id="username" class="form-control form-control-lg text-center" placeholder="Adınız" required autofocus>
                </div>
                <div class="form-group">
                    <input name="surname" type="text" id="inputemail" class="form-control form-control-lg text-center" placeholder="Soyadınız" required>
                </div>
                <div class="form-group">
                    <input name="email" type="email" id="inputEmail" class="form-control form-control-lg text-center" placeholder="Email Adresiniz" required autofocus>
                </div>
                <div class="form-group">
                    <input name="tel" type="number" id="phone" class="form-control form-control-lg text-center" placeholder="Telefon Numaranız" required>
                </div>
                <div class="form-group">
                    <input name="password" type="password" id="inputPassword" class="form-control form-control-lg text-center" placeholder="Şifreniz" required>
                </div>


                <p class="mt-4 d-block text-secondary">
                   Kayıt olduğunuzda <a href="javascript:void(0)">Gizlilik Sözleşmesi</a>'ni kabul etmiş olursunuz.
                </p>


        </div>
    </div>

    <!-- login buttons -->
    <div class="row mx-0 bottom-button-container">
        <div class="col">
            <button name="submit" value="1" class="btn btn-default btn-lg btn-rounded shadow btn-block">Kayıt Ol</button>
        </div>
    </div>
    </form>
    <!-- login buttons -->
</div>


<?php require "statics/footer.php"; ?>
