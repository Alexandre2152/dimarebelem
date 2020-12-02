<?php

include '../../registros/sessaoControle.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Alexandre Santana">
  <title>Dimare Belém | Área Administrativa</title>
  <!-- Favicon -->
  <link rel="icon" href="../../assets/iconesMenu/icone_logo.ico" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">

  <?php
  include '../../registros/usuarioBD.php';
  ?>
</head>

<body>

  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-dark" id="sidenav-main">
    <div class="scrollbar-inner">

      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../../assets/iconesMenu/dimare-logo.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">

          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="pgAdmin.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="text-danger nav-link-text">Orçamento</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://analytics.google.com/analytics/web/?pli=1#/p250401382/reports/defaulthome?params=_u..nav%3Ddefault">
                <i class="ni ni-bullet-list-67 text-orange"></i>
                <span class="text-danger nav-link-text">Analytics</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="text-danger nav-link-text">Usuários</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="text-danger nav-link-text">Perfil</span>
              </a>
            </li> -->
          </ul>

          <!-- Divider -->
          <hr class="my-3 bg-dark">

          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">E-mail</span>
          </h6>

          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://webmail-seguro.com.br/" target="_blank">
                <i class="ni ni-send text-danger"></i>
                <span class="nav-link-text text-danger">Acessar E-mail</span>
              </a>
            </li>
          </ul>
          <br>
          <br>

          <!-- Sair -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="../../registros/sessaoDeletar.php" target="_self">
                <i class="ni ni-lock-circle-open text-danger"></i>
                <span class="nav-link-text text-danger text-uppercase font-weight-bold">SAIR</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-danger border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto "></ul>

          <!-- Logo da loja no lado direito -->
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../../assets/iconesMenu/dimare-logo.png">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $logado; ?></span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <div class="header pb-6 bg-danger">
      <div class="container-fluid">
        <div class="header-body">
        </div>
      </div>
    </div>
    <!-- ----------------------------------------------------------------------------------------- -->
    <!-- Corpo da página -->
    <div class="container-fluid mt--5">
      <div class="row">
        <div class="col">
          <div class="card bg-white" id="conteudo">

            <div class="container p-3" id="paginasAdministrativo">
              <?php usuarioConsulta(); ?>
            </div>



          </div>
        </div>

      </div>


      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col">
            <div class="copyright text-right  text-black">
              &copy; <a href="#" class="font-weight-bold ml-1" target="_blank">Alexandre Santana</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- 
  <script src="pages/rotas.js"></script> -->
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>
<script src="../../routes/rotaspaginasAdm.js"></script>

</html>