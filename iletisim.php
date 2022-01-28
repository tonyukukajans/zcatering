<?php include 'sections/header2.php';
$ayarSor=$db->prepare("SELECT * FROM settings where domain='zcatering.com' LIMIT 1");

$ayarSor->execute(array());

$ayarYaz=$ayarSor->fetch(PDO::FETCH_ASSOC);

$gorselSor=$db->prepare("SELECT * FROM galleries where domain='zcatering.com' && image_title='İletişim'");
$gorselSor->execute(array());
$gorselYaz=$gorselSor->fetch(PDO::FETCH_ASSOC);
?>

<div class="breadcumb-wrapper breadcumb-layout1 background-image link-inherit mb-30"
    data-vs-img="https://tonyukukserver.com/cms/storage/<?php echo $gorselYaz['image'];?>" data-overlay="black" data-opacity="6">
    <div class="container z-index-common">
        <div class="breadcumb-content text-center pt-65 pt-lg-140 pb-95 pb-lg-175">
            <h1 class="breadcumb-title sec-title1 text-white my-0">İletişim</h1>
            <ul class="breadcumb-menu-style1 bg-white">
                <li><a href="index.php"><i class="fal fa-home text-theme"></i>Anasayfa</a></li>
                <li class="active">İletişim</li>
            </ul>
        </div>
    </div>
</div>
<section class="vs-contact-wrapper vs-contact-layout2 py-lg-150 py-60">
    <div class="container">
        <div class="row align-items-center mb-lg-80 mb-40">
            <div class="col-lg-6">
                <form
                    class="contact-form contact-form-style2 bg-smoke mb-4 mb-lg-0 px-15 px-md-40 py-30 py-md-40 px-lg-60 py-lg-60"
                    action="mail.php" method="POST">
                    <div class="form-group"><input type="text" name="name" class="form-control border-shadow"
                            placeholder="Adınız Soyadınız"></div>
                    <div class="form-group"><input type="email" name="email" class="form-control border-shadow"
                            placeholder="E-Mail Adresiniz"></div>
                    <div class="form-group"><textarea class="form-control border-shadow" name="Mesajınız"
                            placeholder="Mesajınız"></textarea></div>
                    <div class="form-group mb-0"><button name="submit" type="submit"
                            class="vs-btn style3 rounded-0">Gönder</button></div>
                </form>
                <p class="form-messages mt-20 mb-0 text-center"></p>
            </div>
            <div class="col-lg-6">
                <div class="contact-information-layout1 list-style-none pl-xl-30">
                    <div class="box mb-20 mb-lg-40">
                        <h2 class="h4 mb-10">Bize Ulaşın</h2>
                        <ul>
                            
                            <li class="d-flex justify-content-between">
                            <p class="mb-3 contact-info"><i
                                class="fal fa-map-marker-alt text-md text-theme mb-10"></i><?php echo $ayarYaz['address1'];?>
                        </p>
                               
                            </li>
                            <li class="d-flex justify-content-between">
                            <p class="mb-3 contact-info"><i
                                class="fal fa-phone text-md text-theme mb-10"></i><?php echo $ayarYaz['number'];?>
                        </p>
                            </li>
                            <li class="d-flex justify-content-between">
                            <p class="mb-3 contact-info"><i
                                class="fal fa-envelope text-md text-theme mb-10"></i><?php echo $ayarYaz['facility_mail'];?>
                        </p>
                            </li>
                        </ul>
                    </div>
                   
                    <div class="mb-0">
                        <h2 class="h4 mb-0">Sosyal Medya'da Biz</h2>
                    </div>
                    <div class="social-links links-has-border">
                                    <ul>
                                    <li><a href="<?php echo $ayarYaz['facility_facebook']?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo $ayarYaz['facility_twitter']?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?php echo $ayarYaz['facility_instagram']?>"><i class="fab fa-instagram"></i></a></li>
                                        
                                        <li><a href="<?php echo $ayarYaz['facility_youtube']?>"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
        <?php echo $ayarYaz['map']?>;
        </div>

    </div>
</section>
<div class="background-image" data-vs-img="assets/img/footer/footer-bg-2-1.jpg" data-overlay="black" data-opacity="8">
 
  <?php 
  include 'sections/footer.php';
  ?>