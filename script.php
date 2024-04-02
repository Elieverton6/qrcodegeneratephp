<?php

if (isset($_POST['confirmarBtn'])) {
    $pegarTexto = $_POST['texto'];

    if (strlen($pegarTexto) > 0) {
        $qrCode = "<img src='https://api.qrserver.com/v1/create-qr-code/?color=000000&amp;bgcolor=FFFFFF&amp;data=" . $pegarTexto . "&amp;qzone=1&amp;margin=0&amp;size=400x400&amp;ecc=L' alt='". $pegarTexto . "' />";
        $alertMessage = "<p class='alert-message alert-message-true'><i class='fa-solid fa-circle-check'></i>QRCODE Gerado com sucesso! <br /></p>";
    } else {
        $alertMessage = "<p class='alert-message alert-message-false'><i class='fa-solid fa-circle-exclamation'></i>Digite algo e clique em GERAR pra gerar o QRCODE!</p>";
    }
}