<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Schedule Five</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url_dos ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= base_url_dos ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?= base_url_dos ?>css/agency.css" rel="stylesheet">
  <link href="<?= base_url ?>css/style.css" rel="stylesheet">
</head>


<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">

      <?php if (isset($_SESSION['identity'])) : ?>
        <a class="navbar-brand js-scroll-trigger" href="<?= base_url ?>schedule/index">Schedule Five</a>
      <?php endif ?>

      <?php if (!isset($_SESSION['identity'])) : ?>
        <a class="navbar-brand js-scroll-trigger" href="<?= base_url_dos ?>index.html">Schedule Five</a>
      <?php endif ?>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <?php if (!isset($_SESSION['identity'])) : ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url_dos ?>index.html#services">Servicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url ?>index.php">Identifícate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url ?>user/register">Regístrate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url_dos ?>index.html#about">Proyecto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url_dos ?>index.html#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url_dos ?>index.html#contact">Contact</a>
            </li>
            <?php endif ?>
            <?php if (isset($_SESSION['identity'])) : ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url ?>schedule/index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url ?>schedule/gestion">enviados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url ?>worker/gestion">trabajadores</a>
            </li>

            <li class="nav-item">
           
              <a class="nav-link js-scroll-trigger" href="<?= base_url ?>user/logout">Cerrar sesión</a>
          <?php endif ?>
          </li>
         

        </ul>

      </div>
    </div>

  </nav>