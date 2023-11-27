<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font -->
    <!-- Oswald -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&display=swap" rel="stylesheet">

    <!-- Josefin Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600;700&display=swap" rel="stylesheet"> 


    <link rel="stylesheet" href="/css/style.css">
    
  </head>
  <body>

  <nav class="navbar fixed-top navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/logo-navbar-1.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                    <a class="nav-link" id="nav-home" href="<?= base_url('/'); ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('/perangkat'); ?>">PERANGKAT</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('/pelanggan'); ?>">PELANGGAN</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('/user-list'); ?>">USER LIST</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('/transkasi'); ?>">TRANSAKSI</a>
                    </li>


                    <li class="nav-item ">
                      <a class="nav-link" aria-current="page" href="<?= base_url('/logout'); ?>">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
    