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

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRCODE Generate</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <main class="wrapper">
            <h2 class="wrapper-title">Gerador de QRCODE</h2>
            <div class="contain-input">
                <form method="post">
                    <div class="input-box">
                        <input placeholder="Digite sua mensagem ou link:" type="text" name="texto" id="texto" />
                        <button name="confirmarBtn">GERAR</button>
                    </div> <!-- input-box -->
                    <?php if (isset($alertMessage)): ?>
                        <?= $alertMessage ?>
                    <?php endif; ?>
                </form> <!-- form -->
            </div> <!--contain-input -->
            <?php if (isset($_POST['confirmarBtn']) and strlen($pegarTexto) > 0): ?>
            <div class="contain-img">
                <?= $qrCode; ?>
            </div> <!-- contain-img -->
            <div class="alert-content-contain">
                <i class="fa-solid fa-eye"></i>
                <div class="alert-content">
                    <h3>Conteudo do QRCODE:</h3>
                    <p><?= $pegarTexto; ?></p>
                </div> <!-- alert-content -->
            </div> <!-- alert-content -->
            <?php endif; ?>
        </main> <!-- wrapper -->
    </div> <!-- container -->
    
    <script src="https://kit.fontawesome.com/18a975bbae.js" crossorigin="anonymous"></script> <!-- FONT AWESOME -->
</body>
</html>