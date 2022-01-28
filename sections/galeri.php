<section class="vs-gallery-wrapper gallery-box-layout1 link-inherit pb-lg-100" id="gallery">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="sec-title1 text-font3">
                <span class="text-theme">
                    <font style="vertical-align: inherit;">Galeri </font>
                </span>
            </h2>
            <div class="sec-line"><img src="assets/img/shape/sec-title-1.png" alt="Bölüm Şekli Simgesi"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
        <?php 
                        $galerisor=$db->prepare("SELECT * FROM contents where domain='zcatering.com' && content_category_id='19' LIMIT 8");
                        $galerisor->execute(array());
                        while ($galeriyaz=$galerisor->fetch(PDO::FETCH_ASSOC)){

                        
                        ?>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="vs-gallery image-scale-hover">
                    <div class="gallery-img"><img src="https://tonyukukserver.com/cms/storage/<?php echo $galeriyaz['content_img1'];?>" class="w-100"
                            alt="Galeri Resmi"></div>
                    <div class="gallery-content px-40 py-40" data-overlay="black" data-opacity="7">
                        <h3 class="gallery-title h4 mb-0 text-white"><a>
                                <font style="vertical-align: inherit;"><?php echo $galeriyaz['content_title'];?></font>
                            </a></h3><a href="https://tonyukukserver.com/cms/storage/<?php echo $galeriyaz['content_img1'];?>"
                            class="icon-btn popup-image text-body"><i class="fal fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <?php }?>
         
        </div>
    </div>
</section>