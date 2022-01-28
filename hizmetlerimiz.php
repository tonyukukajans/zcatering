<?php include 'sections/header2.php';
$ayarSor=$db->prepare("SELECT * FROM settings where domain='zcatering.com' LIMIT 1");

$ayarSor->execute(array());

$ayarYaz=$ayarSor->fetch(PDO::FETCH_ASSOC);

$gorselSor=$db->prepare("SELECT * FROM galleries where domain='zcatering.com' && image_title='Hizmetlerimiz'");
$gorselSor->execute(array());
$gorselYaz=$gorselSor->fetch(PDO::FETCH_ASSOC);
?>
    <div class="breadcumb-wrapper breadcumb-layout1 background-image link-inherit mb-30"
    data-vs-img="https://tonyukukserver.com/cms/storage/<?php echo $gorselYaz['image'];?>" data-overlay="black" data-opacity="6">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center pt-65 pt-lg-140 pb-95 pb-lg-175">
                <h1 class="breadcumb-title sec-title1 text-white my-0">Hizmetlerimiz</h1>
                <ul class="breadcumb-menu-style1 bg-white">
                    <li><a href="index.php"><i class="fal fa-home text-theme"></i>Anasayfa</a></li>
                    <li class="active">Hizmetlerimiz</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="vs-service-wrapper vs-service-layout2 link-inherit pb-lg-100 pt-50 pb-30" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-9 col-xl-7">
                    <div class="section-title text-center">
                        <h2 class="sec-title1 text-font3"> Hizmetlerimiz</h2>
                        <div class="sec-line"><img src="assets/img/shape/sec-title-1.png" alt="Section Shape Icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row arrow-has-margin text-center  pb-lg-50" data-slidetoshow="3" data-dots="true"
                data-xldots="true" data-mldots="true" data-lgdots="true" data-mdslidetoshow="2" data-smslidetoshow="2"
                data-xsslidetoshow="1"> 

                <?php 
                      $hizmetsor=$db->prepare("SELECT * FROM contents where domain='zcatering.com' && content_category_id='21'");
                      $hizmetsor->execute(array());
                      while ($hizmetyaz=$hizmetsor->fetch(PDO::FETCH_ASSOC)){
                ?>
                <div class="col-xl-4">
                    <div class="vs-service vs-box1 px-20 px-xl-40 pt-30 pt-xl-60 pb-20 pb-xl-50 mb-30"><span
                            class="service-icon text-theme d-block mb-30">
                            <img src="https://tonyukukserver.com/cms/storage/<?php echo $hizmetyaz['content_img4'];?>">
                        </span>
                        <h3 class="service-title link-inherit mb-10"><a href="hizmet-detay.php?id=<?php echo $hizmetyaz['id'];?>"><?php echo $hizmetyaz['content_title'];?></a></h3>
                        <p class="service-text mb-0"><?php echo $hizmetyaz['content_coverletter'];?></p>
                    </div>
                </div>
                <?php }?>
                
            </div>
        </div>
    </section>
    <?php 
  include 'sections/teklifal.php';
  include 'sections/footer.php'; ?>