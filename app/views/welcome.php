<?php require 'statics/header.php'; ?>

<div class="wrapper">
    <!-- Swiper intro -->
    <div class="swiper-container introduction pt-5">
        <div class="swiper-wrapper">
            <div class="swiper-slide overflow-hidden text-center">
                <div class="row no-gutters">
                    <div class="col align-self-center px-3">
                        <img src="<?= public_url('img/information-graphic1.png') ?>" alt="" class="mx-100 my-5">
                        <div class="row">
                            <div class="container mb-5">
                                <h4>Arıza Tespiti</h4>
                                <p>Hızlı bir şekilde araç görselinizi yükleyiniz.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide overflow-hidden text-center">
                <div class="row no-gutters">
                    <div class="col align-self-center px-3">
                        <img src="<?= public_url('img/infomarmation-graphics2.png') ?>" alt="" class="mx-100 my-5">
                        <div class="row">
                            <div class="container mb-5">
                                <h4>Tamir İşlemi</h4>
                                <p>Tamir Yapılacak işlemi seçiniz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide overflow-hidden text-center">
                <div class="row no-gutters">
                    <div class="col align-self-center px-3">
                        <img src="<?= public_url('img/infomarmation-graphics2.png') ?>" alt="" class="mx-100 my-5">
                        <div class="row">
                            <div class="container mb-5">
                                <h4>En yakın tamirci</h4>
                                <p>En yakın ve uygun tamirci size ulaşsın.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- Swiper intro ends -->

    <!-- login buttons -->
    <div class="row mx-0 bottom-button-container">
        <div class="col">
            <a href="<?= site_url('login') ?>" class="btn btn-default btn-lg btn-rounded shadow btn-block">Giriş</a>
        </div>
        <div class="col">
            <a href="<?= site_url('sign-up') ?>" class="btn btn-white bg-white btn-lg btn-rounded shadow btn-block">Kayıt Ol</a>
        </div>
    </div>
    <!-- login buttons -->
</div>

<!-- notification -->

<!-- notification ends -->



<?php require 'statics/footer.php'; ?>
<!-- page level script -->
<script>
    $(window).on('load', function() {
        var swiper = new Swiper('.introduction', {
            pagination: {
                el: '.swiper-pagination',
            },
        });

        /* notification view and hide */
        setTimeout(function() {
            $('.notification').addClass('active');
            setTimeout(function() {
                $('.notification').removeClass('active');
            }, 3500);
        }, 500);
        $('.closenotification').on('click', function() {
            $(this).closest('.notification').removeClass('active')
        });
    });

</script>


