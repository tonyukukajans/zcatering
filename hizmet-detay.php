<?php include 'sections/header2.php';
$ayarSor=$db->prepare("SELECT * FROM settings where domain='zcatering.com' LIMIT 1");

$ayarSor->execute(array());

$ayarYaz=$ayarSor->fetch(PDO::FETCH_ASSOC);

$gorselSor=$db->prepare("SELECT * FROM galleries where domain='zcatering.com' && image_title='Hizmetlerimiz'");
$gorselSor->execute(array());
$gorselYaz=$gorselSor->fetch(PDO::FETCH_ASSOC);
$id = $_GET['id'];

$blogsor = $db->prepare('SELECT * FROM contents where id=' . $id);

$blogsor->execute(array());

$blogyaz = $blogsor->fetch(PDO::FETCH_ASSOC);
?>

<div class="breadcumb-wrapper breadcumb-layout1 background-image link-inherit mb-30"
    data-vs-img="https://tonyukukserver.com/cms/storage/<?php echo $gorselYaz['image'];?>" data-overlay="black" data-opacity="6">
    <div class="container z-index-common">
        <div class="breadcumb-content text-center pt-65 pt-lg-140 pb-95 pb-lg-175">
            <h1 class="breadcumb-title sec-title1 text-white my-0"><?php echo $blogyaz['content_title'];?></h1>
            <ul class="breadcumb-menu-style1 bg-white">
                <li><a href="index.php"><i class="fal fa-home text-theme"></i>Anasayfa</a></li>
                <li class="active">Hizmetlerimiz</li>
            </ul>
        </div>
    </div>
</div>
  
    <section class="vs-blog-wrapper blog-details-layout1 pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="vs-blog">
                       
                        <div class="blog-image mb-25 mb-xl-35 mt-15 mt-xl-20"><img
                                src="https://tonyukukserver.com/cms/storage/<?php echo $blogyaz['content_img1'];?>" alt="Blog Image">
                            
                        </div>
                        <div class="blog-content mb-25 mb-xl-30">
                        <h3 class="h2"><?php echo $blogyaz['content_title'];?></h3>
                           <p>
<?php echo $blogyaz['content']; ?>
                           
                           </p>
                            
                        
                        </div>
                        
                      
                     
                      
                    </div>
                </div>
                <div class="col-lg-4">
                <aside class="sidebar-area">
                        
                       
                     
                        <div class="widget">
                            <h3 class="widget_title">Hizmetlerimiz</h3>
                            <div class="vs-widget-recent-post">
                            <?php 
                     $blogsor2=$db->prepare("SELECT * FROM contents where domain='zcatering.com' && content_category_id='21' LIMIT 10");
                     $blogsor2->execute(array());
                     while ($blogyaz2=$blogsor2->fetch(PDO::FETCH_ASSOC)){
                    ?>
                                
                                
                                <div class="recent-post media align-items-center">
                                    <div class="media-img"><img src="https://tonyukukserver.com/cms/storage/<?php echo $blogyaz2['content_img1'];?>"
                                            alt="Recent Post Image"  width="100px"></div>
                                    <div class="media-body pl-20">
                                        <h4 class="recent-post-title h6 mb-0"><a href="blog-detay.php?id=<?php echo $blogyaz2['id'];?>">
                                        <?php echo $blogyaz2['content_title'];?></a></h4><span class="text-xs"><?php echo $blogyaz2['content_coverletter'];?></span>
                                    </div>
                                </div><?php }?>
                            </div>
                        </div>
                       
                    </aside>
                </div>
            </div>
        </div>
    </section>
  <?php include 'sections/footer.php'; ?>