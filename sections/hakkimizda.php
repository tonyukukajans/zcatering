<?php 
$kurumsalSor=$db->prepare("SELECT * FROM contents where domain='zcatering.com' && content_category_id='20'");
$kurumsalSor->execute(array());
$kurumsalYaz=$kurumsalSor->fetch(PDO::FETCH_ASSOC);
?>
<section class="vs-about-wrapper vs-about-layout4 pt-60 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content"> 
                        <p class="h3 text-theme text-font3 mb-10  text-center pb-50">Z Catering</p>
                       
                        
                <div class="row">
<div class="col-md-6">
    <h2>Hakkımızda</h2>
<?php echo $kurumsalYaz['content_coverletter'];?>
</div>
<div class="col-md-6">
<h2>Neden Biz ?</h2>
<?php echo $kurumsalYaz['content'];?>
</div>

      
</div>


                        <div class="vs-carousel vs-3dcarousel pt-lg-15  text-center" data-slidetoshow="1"
                            data-variablewidth="true" data-loop="false">
                            <div><img src="https://tonyukukserver.com/cms/storage/<?php echo $kurumsalYaz['content_img1'];?>" alt="About Image"></div>
                            <div><img src="https://tonyukukserver.com/cms/storage/<?php echo $kurumsalYaz['content_img2'];?>" alt="About Image"></div>
                            <div><img src="https://tonyukukserver.com/cms/storage/<?php echo $kurumsalYaz['content_img3'];?>" alt="About Image"></div>
                            <div><img src="https://tonyukukserver.com/cms/storage/<?php echo $kurumsalYaz['content_img4'];?>" alt="About Image"></div>
                            <div><img src="assets/img/about/about-slide-1-5.jpg" alt="About Image"></div>
                            <div><img src="assets/img/about/about-slide-1-6.jpg" alt="About Image"></div>
                        </div>
                        <br>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vs-service-wrapper vs-service-layout2 link-inherit pb-lg-100 pb-30" id="service">
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
            <div class="row arrow-has-margin text-center vs-carousel pb-lg-50" data-slidetoshow="3" data-dots="true"
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