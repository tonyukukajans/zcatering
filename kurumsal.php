<?php include 'sections/header2.php';
$ayarSor=$db->prepare("SELECT * FROM settings where domain='zcatering.com' LIMIT 1");

$ayarSor->execute(array());

$ayarYaz=$ayarSor->fetch(PDO::FETCH_ASSOC);

$gorselSor=$db->prepare("SELECT * FROM galleries where domain='zcatering.com' && image_title='Kurumsal'");
$gorselSor->execute(array());
$gorselYaz=$gorselSor->fetch(PDO::FETCH_ASSOC);

$kurumsalSor=$db->prepare("SELECT * FROM contents where domain='zcatering.com' && content_category_id='20'");
$kurumsalSor->execute(array());
$kurumsalYaz=$kurumsalSor->fetch(PDO::FETCH_ASSOC);


?>
    <div class="breadcumb-wrapper breadcumb-layout1 background-image link-inherit mb-30"
    data-vs-img="https://tonyukukserver.com/cms/storage/<?php echo $gorselYaz['image'];?>" data-overlay="black" data-opacity="6">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center pt-65 pt-lg-140 pb-95 pb-lg-175">
                <h1 class="breadcumb-title sec-title1 text-white my-0">Kurumsal</h1>
                <ul class="breadcumb-menu-style1 bg-white">
                    <li><a href="index.php"><i class="fal fa-home text-theme"></i>Anasayfa</a></li>
                    <li class="active">Kurumsal</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="vs-about-wrapper vs-about-layout4 py-lg-150 pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center"> 
                        <p class="h3 text-theme text-font3 mb-10">Z Catering</p>
                        <h2 class="sec-title1">Hakkımızda</h2>
                        <?php echo $kurumsalYaz['content'];?>
                        <div class="vs-carousel vs-3dcarousel pt-lg-15 pb-30 pb-lg-40" data-slidetoshow="1"
                            data-variablewidth="true" data-loop="false">
                            <div><img src="https://tonyukukserver.com/cms/storage/<?php echo $kurumsalYaz['content_img1'];?>" alt="About Image"></div>
                            <div><img src="https://tonyukukserver.com/cms/storage/<?php echo $kurumsalYaz['content_img2'];?>" alt="About Image"></div>
                            <div><img src="https://tonyukukserver.com/cms/storage/<?php echo $kurumsalYaz['content_img3'];?>" alt="About Image"></div>
                            <div><img src="https://tonyukukserver.com/cms/storage/<?php echo $kurumsalYaz['content_img4'];?>" alt="About Image"></div>
                            <div><img src="assets/img/about/about-slide-1-5.jpg" alt="About Image"></div>
                            <div><img src="assets/img/about/about-slide-1-6.jpg" alt="About Image"></div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

 
  <?php include 'sections/bulten.php';
  include 'sections/teklifal.php';
  include 'sections/footer.php';
  ?>