<?php if (isset($message['err'])): ?>
    <?php header("Refresh: 2;url=" . site_url("register")); ?>
    <script>swal("BAŞARISIZ" , "<?= $message['err'] ?>" , "error")</script>
<?php elseif (isset($message['suc'])): ?>
    <script>swal("BAŞARILI", "<?= $message['suc'] ?>", "success")</script>
<?php endif; ?>
<footer>
    <div class="xfooter d-flex justify-content-evenly row py-5 border-bottom ">
        <div class="col-xl-1 col-10 firsttt">
            <a href="" class="text-dark d-flex align-items-center">
                <i class="fas fa-car " style="font-size: 2rem;"></i><span
                        style="font-weight: 400;padding-left: 5px">elek</span>
            </a>
            <p style="margin-top: 1rem;">085055555555</p>
            <ul class="d-flex">
                <li><i class="fab fa-facebook-square"></i></li>
                <li><i class="fab fa-facebook-square"></i></li>
                <li><i class="fab fa-facebook-square"></i></li>
                <li><i class="fab fa-facebook-square"></i></li>
            </ul>
        </div>
        <div class="col-xl-1 col-10 company">
            <h6>Company</h6>
            <ul style="margin-top: 1.8rem;">
                <li><a href="">Policy</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Press</a></li>
            </ul>
        </div>
        <div class="col-xl-1 col-10 company">
            <h6>Service Providers</h6>
            <ul style="margin-top: 1.8rem;">
                <li><a href="">Our Products</a></li>
                <li><a href="">Our Products</a></li>
                <li><a href="">Our Products</a></li>
                <li><a href="">Our Products</a></li>
            </ul>
        </div>
        <div class="col-xl-1 col-10 apps">
            <h6 style="margin-bottom: 2rem;">Mobile Apps</h6>
            <ul>
                <li><a href=""><img style="width: 180px; border: 1px solid #888; border-radius: 10px;"
                                    src="img/apps.jpg" alt=""></a></li>
                <li><a href=""><img style="width: 180px; border-radius: 10px;" src="img/plays.jpg" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
    <div>

    </div>
</footer>



</div>

<script src="<?= public_url('main.js') ?>"></script>
<script src="<?= public_url('request.js') ?>"></script>
</body>

</html>