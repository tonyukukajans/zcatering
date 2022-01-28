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
    <meta name="author" content="Tonyukuk Reklam Ajansı">
    <meta name="description" content="Z Catering, Arkaz Grup Şirketleri bünyesinde kurulan ve Catering Hizmeti veren firmamızdır.
1970′ lerden gelen başarılı ve ticari yaşamdan sonra kurduğumuz bu güzel firma sizin ve iş yerlerinizin verimliği en üst seviyeye taşıma yolunda yardımcı olacaktır. Çözüm odaklı yapımızla her zaman problemlerinizi çözmeye hazırız.

">
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
                    <nav class="main-menu menu-sticky1 d-none d-lg-block link-inherit">
                        <ul>
                            <li><a href="index.php">Anasayfa</a></li>
                            <li><a href="kurumsal.php">Kurumsal</a></li>
                            <li><a href="referanslarimiz.php">Referanslarımız</a></li>
                            <li><a href="galeri.php">Galeri</a></li>
                            <li><a href="hizmetlerimiz.php">Hizmetlerimiz</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="iletisim.php">İletişim</a></li>
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
    <header class="header-wrapper header-layout2 py-2 py-lg-0 px-xl-115">
        <div class="container-fluid position-relative">
            <div class="row align-items-center">
                <div class="col-6 col-md-3 col-lg-2 col-xl-2">
                    <div class="header-logo"><a href="index.php"><img src="assets/img/logo.png" alt="Logo"></a></div>
                </div>
                <div class="col-6 col-md-10 col-lg-7 col-xl-7 position-static">
                    <nav class="main-menu menu-style1 link-inherit text-right text-xl-left mobile-menu-active">
                        <ul>
                            <li><a href="index.php">Anasayfa</a></li>
                            <li><a href="kurumsal.php">Kurumsal</a></li>
                            <li><a href="referanslarimiz.php">Referanslarımız</a></li>
                            <li><a href="hizmetlerimiz.php">Hizmetlerimiz</a></li>
                            <li><a href="galeri.php">Galeri</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="iletisim.php">İletişim</a></li>
                            
                        </ul>
                        <ul>
                        <li class=" d-lg-none"><a><i
                                class="fal fa-map-marker-alt"></i> <?php echo $ayarYaz['address1'];?> </a></li>
                               
                                <li class=" d-lg-none"><a><i
                                class="fal fa-envelope"></i> <?php echo $ayarYaz['facility_mail'];?> </a></li>
                                <li class=" d-lg-none"><a><i
                                class="fal fa-phone-alt"></i> <?php echo $ayarYaz['number'];?> </a></li>
                        </ul>
                        <div class="social-links d-lg-none pt-10 text-center">
                         
                     
                            
                        
                        <ul style="margin-bottom:10px;">
                                <li style="border:0px;"><a href="<?php echo $ayarYaz['facility_facebook']?>"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li style="border:0px;"><a href="<?php echo $ayarYaz['facility_twitter']?>"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li style="border:0px;"><a href="<?php echo $ayarYaz['facility_instagram']?>"><i
                                            class="fab fa-instagram"></i></a></li>

                                <li style="border:0px;"><a href="<?php echo $ayarYaz['facility_youtube']?>"><i
                                            class="fab fa-youtube"></i></a></li>
                            </ul>
                        <a href="index.php#teklifal" class="vs-btn mask-style1 hidden-xs pt-20">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Teklif Al </font>
                                    </font>
                                </font>
                            </font>
                        </a>   
                        </div>
                    

                    </nav><button type="button"
                        class="vs-menu-toggle ml-auto d-block text-theme border-theme d-lg-none"><i
                            class="far fa-bars"></i></button>
                </div>
                <div class="col-lg-3 col-xl-3 mobildegizle">

                    <div class="header-btn pl-xl-50 mobildegizle">
                        <a href="index.php#teklifal" class="vs-btn mask-style1 hidden-xs">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Teklif Al </font>
                                    </font>
                                </font>
                            </font>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>