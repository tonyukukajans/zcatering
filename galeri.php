<?php include 'sections/header2.php';
$ayarSor=$db->prepare("SELECT * FROM settings where domain='zcatering.com' LIMIT 1");

$ayarSor->execute(array());

$ayarYaz=$ayarSor->fetch(PDO::FETCH_ASSOC);

$gorselSor=$db->prepare("SELECT * FROM galleries where domain='zcatering.com' && image_title='Galeri'");
$gorselSor->execute(array());
$gorselYaz=$gorselSor->fetch(PDO::FETCH_ASSOC);
?>
<div class="breadcumb-wrapper breadcumb-layout1 background-image link-inherit mb-30"
    data-vs-img="https://tonyukukserver.com/cms/storage/<?php echo $gorselYaz['image'];?>" data-overlay="black"
    data-opacity="6">
    <div class="container z-index-common">
        <div class="breadcumb-content text-center pt-65 pt-lg-140 pb-95 pb-lg-175">
            <h1 class="breadcumb-title sec-title1 text-white my-0">Galeri</h1>
            <ul class="breadcumb-menu-style1 bg-white">
                <li><a href="index.php"><i class="fal fa-home text-theme"></i>Anasayfa</a></li>
                <li class="active">Galeri</li>
            </ul>
        </div>
    </div>
</div>

<section class="vs-gallery-wrapper gallery-box-layout1 link-inherit pb-lg-100 pb-30 pt-100" id="gallery">
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
                        $galerisor=$db->prepare("SELECT * FROM contents where domain='zcatering.com' && content_category_id='19'");
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
<?php 
  include 'sections/teklifal.php';
  include 'sections/footer.php'; ?>