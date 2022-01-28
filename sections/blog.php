
    <section class="vs-product-wrapper link-inherit vs-product-layout1 pt-100 pb-100">
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
        <div class="container">
            
        <div class="row vs-carousel" data-slidetoshow="3" data-lgslidetoshow="3" data-mdslidetoshow="2"
                data-smslidetoshow="1" data-xsslidetoshow="1">
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
