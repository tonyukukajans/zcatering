<?php

include "sections/db.php";



$ayarSor=$db->prepare("SELECT * FROM settings where domain='zcatering.com' LIMIT 1");

$ayarSor->execute(array());

$ayarYaz=$ayarSor->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $ayarYaz['title']?></title>
    <meta name="author" content="Vecuro">
    <meta name="description" content="Grillinator - Food Restaurant Cafe Grill & Bistro HTML Template">
    <meta name="keywords" content="Grillinator - Food Restaurant Cafe Grill & Bistro HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="../../../css2.css?family=Cookie&family=Roboto:wght@300;400;500;700&family=Rufina:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/theme-color1.css">
    <link rel="stylesheet" id="themeColor" href="#">
</head>

<body>

   
   
    <div class="sticky-header-wrap sticky-header py-1 py-sm-2 py-lg-1">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-5 col-md-3">
                    <div class="logo"><a href="index.php"><img src="assets/img/logo.png" alt="Clianio"></a></div>
                </div>
                <div class="col-7 col-md-9 text-right position-static">
                    <nav class="main-menu menu-sticky1 d-none d-lg-block link-inherit mobile-menu-active">
                        <ul>
                            <li><a href="index.php">Anasayfa</a>

                            </li>
                            <li><a href="kurumsal.php">Kurumsal</a>

                            </li>
                            <li><a href="referanslarimiz.php">Referanslarımız</a>

                            </li>
                            <li><a href="hizmetlerimiz.php">Hizmetlerimiz</a></li>
                            <li><a href="galeri.php">Galeri</a>

                            </li>
                            <li><a href="blog.php">Blog</a>

                            </li>
                            <li><a href="iletisim.php">İletişim</a>

                            </li>

                        </ul>
                    </nav><button class="vs-menu-toggle text-theme border-theme d-inline-block d-lg-none"><i
                            class="far fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area"><button class="vs-menu-toggle text-theme"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="index.php"><img src="assets/img/logo.png" alt="Clianio"></a></div>
            <div class="vs-mobile-menu link-inherit"></div>
        </div>
    </div>
    <header class="header-wrapper header-layout1 position-absolute pt-lg-40">
        <div class="container position-relative">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 col-xl-10 position-static">
                    <div
                        class="menu-area link-inherit d-none d-lg-flex flex-wrap 
                        justify-content-between align-items-center text-center bg-white radius-100">
                        <nav class="main-menu menu-style2">
                            <ul>
                                <li><a href="index.php">Anasayfa</a>

                                </li>
                                <li><a href="kurumsal.php">Kurumsal</a>

                                </li>
                                <li><a href="referanslarimiz.php">Referanslarımız</a>

                                </li>

                            </ul>
                        </nav>
                        <div class="header-logo px-4 px-lg-0 mx-lg-15 mx-xl-25"><a href="index.php"><img
                                    src="assets/img/logo.png" alt="Logo"></a></div>
                        <nav class="main-menu menu-style2">
                            <ul>
                            <li><a href="hizmetlerimiz.php">Hizmetlerimiz</a></li>
                                <li><a href="galeri.php">Galeri</a>

                                </li>
                                <li><a href="blog.php">Blog</a>

                                </li>
                                <li><a href="iletisim.php">İletişim</a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
            <div class="mobile-menu-bar py-3 py-lg-0 d-block d-lg-none">
                <div class="row align-items-center">
                    <div class="col-6"><a href="index.php"><img src="assets/img/logo.png" alt="Logo Image"></a></div>
                    <div class="col-6 text-right"><button type="button"
                            class="vs-menu-toggle text-theme border-theme"><i class="far fa-bars"></i></button></div>
                </div>
            </div>
        </div>
    </header>