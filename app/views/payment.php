<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Örnek Ödeme Sayfası</title>
</head>
<body>

<div>
    <h1>Örnek Ödeme Sayfası</h1>
    <p>1. ADIM için örnek kodlar</p>
</div>
<br><br>

<div style="width: 100%;margin: 0 auto;display: table;">

    <!-- Ödeme formunun açılması için gereken HTML kodlar / Başlangıç -->
    <script src="https://www.paytr.com/js/iframeResizer.min.js"></script>
    <iframe src="https://www.paytr.com/odeme/guvenli/<?php echo $token;?>" id="paytriframe" frameborder="0" scrolling="no" style="width: 100%;"></iframe>
    <script>iFrameResize({},'#paytriframe');</script>
    <!-- Ödeme formunun açılması için gereken HTML kodlar / Bitiş -->

</div>

<br><br>
</body>
</html>
