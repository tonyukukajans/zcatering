<?php include 'sections/header2.php';
$ayarSor=$db->prepare("SELECT * FROM settings where domain='zcatering.com' LIMIT 1");

$ayarSor->execute(array());

$ayarYaz=$ayarSor->fetch(PDO::FETCH_ASSOC);

$gorselSor=$db->prepare("SELECT * FROM galleries where domain='zcatering.com' && image_title='Referanslarımız'");
$gorselSor->execute(array());
$gorselYaz=$gorselSor->fetch(PDO::FETCH_ASSOC);
?>
<div class="breadcumb-wrapper breadcumb-layout1 background-image link-inherit mb-30"
    data-vs-img="https://tonyukukserver.com/cms/storage/<?php echo $gorselYaz['image'];?>" data-overlay="black"
    data-opacity="6">
    <div class="container z-index-common">
        <div class="breadcumb-content text-center pt-65 pt-lg-140 pb-95 pb-lg-175">
            <h1 class="breadcumb-title sec-title1 text-white my-0">Referanslarımız</h1>
            <ul class="breadcumb-menu-style1 bg-white">
                <li><a href="index.php"><i class="fal fa-home text-theme"></i>Anasayfa</a></li>
                <li class="active">Referanslarımız</li>
            </ul>
        </div>
    </div>
</div>
<section class="vs-gallery-wrapper gallery-box-layout1 link-inherit  pt-100" id="gallery">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="sec-title1 text-font3">
                <span class="text-theme">
                    <font style="vertical-align: inherit;">Referanslarımız </font>
                </span>
            </h2>
            <div class="sec-line"><img src="assets/img/shape/sec-title-1.png" alt="Bölüm Şekli Simgesi"></div>
        </div>
    </div>
</section>



    <section class="vs-product-wrapper link-inherit vs-product-layout1">
        <div class="container">
            <div class="row justify-content-center">
            <?php 
                        $galerisor=$db->prepare("SELECT * FROM contents where domain='zcatering.com' && content_category_id='22' ");
                        $galerisor->execute(array());
                        while ($galeriyaz=$galerisor->fetch(PDO::FETCH_ASSOC)){

                        
                        ?>
            
                <div class="col-md-4 col-lg-3">
                    <div class="vs-product">
                        <div class="product-header">
                            <div class="product-img"><img src="https://tonyukukserver.com/cms/storage/<?php echo $galeriyaz['content_img1'];?>"
                                    alt="Product Image" class="w-100"></div>
                                    <hr>
                            
                        </div>
                        <style>
                            .product-content p{
                                font-size:14px;
                                line-height:20px;
                            }
                            </style>
                        <div class="product-body px-15 px-lg-30 py-15 py-lg-30">
                            <div class="product-content text-center">
                                
                                <h3 class="product-title h4"><?php echo $galeriyaz['content_title'];?></h3>
                                <?php echo $galeriyaz['content'];?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            
        </div>
    </section>



    <?php 
  include 'sections/teklifal.php';
  include 'sections/footer.php'; ?>