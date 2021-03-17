<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B45ETSR9VM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-B45ETSR9VM');
    </script>

    <?php
    include 'pages/title.php';
    include 'pages/home.php';
    include 'pages/conteudoPgAmbientes.php';
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php title(); ?></title>

    <link rel="shortcut icon" href="assets/iconesMenu/icone_logo.ico" />

    <meta name="author" content="Alexandre Santana">
    <meta name="description" content="Loja Dimare Belém - A mais nova loja de móveis planejados, entre e solicite seu orçamento.">
    <meta name="keywords" content="loja, lojas, dimare, belem, planejados, moveis, móveis, casa, quarto, sala, banheiro, escritório, escritorio, marcenaria, orcamento, orçamento, cozinha, apartamento, familia, família">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index">

    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styleManual.css">

    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Barlow', sans-serif;
        }
    </style>

</head>

<body>
    <!--menu geral-->
    <div class="">
        <?php
        menu();
        ?>
    </div>

    <!--menu campo dos slides superio e slides do portifólio-->
    <div>
        <?php
        slideCarrosel();
        //menuslidePotfolio();
        //servicosDestaques();
        ?>
    </div>

    <!--Barra inferior na cor cinza-->
    <div class="pt-5">
        <p style="height: 20px; background: rgb(199, 199, 199); ">&nbsp;</p>
    </div>
    </div>

    <!--Conteúdo da página--->
    <div class="container">
        <?php ambientes(); ?>
    </div>

    <!--Campo do roda pé-->
    <footer style="background: rgb(199, 199, 199);">
        <?php rodape(); ?>
    </footer>

</body>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/escolhaCamposPortfolios.js"></script>

</html>