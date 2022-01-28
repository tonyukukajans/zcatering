 
    <?php 
    $gorselSor=$db->prepare("SELECT * FROM galleries where domain='zcatering.com' && image_title='Bülten'");
    $gorselSor->execute(array());
    $gorselYaz=$gorselSor->fetch(PDO::FETCH_ASSOC);
    ?>
    <section class="vs-subscribe-wrapper vs-subscribe-layout1 background-image py-lg-150 py-60"
     data-vs-img="https://tonyukukserver.com/cms/storage/<?php echo $gorselYaz['image'];?>" style="background-image: url(&quot;https://tonyukukserver.com/cms/storage/<?php echo $gorselYaz['image'];?>&quot;);">
        <div class="container">
            <div class="row justify-content-center justify-content-xl-start">
                <div class="col-lg-9 col-xl-7">
                    <div class="vs-subscribe text-center pb-lg-30">
                        <div class="background-image d-inline-block bg-fluid pt-60 pt-lg-80 px-100 px-lg-120 pb-30" data-vs-img="assets/img/shape/subscribe-bg-icon-1-1.png" style="background-image: url(&quot;assets/img/shape/subscribe-bg-icon-1-1.png&quot;);"><span class="text-theme"><i class="fal fa-envelope-open fa-3x"></i></span></div>
                        <h2 class="h1 mb-10">E - Bülten</h2>
                        <p> Aylık yemek programları e-postanıza gelsin. </p>
                    </div>
                    <form action="#" class="vs-subscribe-form subscribe-form-style1 d-sm-flex"><span class="subscribe-form-icon">
                        <i class="fal fa-envelope text-title"></i></span> <input type="email" class="form-control" placeholder="E-Mail Adresiniz"> 
                        <button type="submit" class="vs-btn mask-style1">Kaydol</button></form>
                </div>
            </div>
        </div>
    </section>