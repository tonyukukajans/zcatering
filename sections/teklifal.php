<?php
$ayarSor=$db->prepare("SELECT * FROM settings where domain='zcatering.com' LIMIT 1");

$ayarSor->execute(array());

$ayarYaz=$ayarSor->fetch(PDO::FETCH_ASSOC);
$gorselSor=$db->prepare("SELECT * FROM galleries where domain='zcatering.com' && image_title='Teklif'");
$gorselSor->execute(array());
$gorselYaz=$gorselSor->fetch(PDO::FETCH_ASSOC);
?>
<section id="teklifal"class="vs-reservation-wrapper vs-reservation-layout4 background-image bg-fixed py-lg-130 py-60"
    data-vs-img="https://tonyukukserver.com/cms/storage/<?php echo $gorselYaz['image'];?>" data-overlay="black" data-opacity="6" id="contact"
    style="background-image: url(https://tonyukukserver.com/cms/storage/<?php echo $gorselYaz['image'];?>);"> 
    <div class="container z-index-common">
        <div class="section-title text-center">
            <h2 class="sec-title1 text-font3 text-white">
                <font style="vertical-align: inherit;">Teklif Al </font>
                
            </h2>
            <div class="sec-line"><img src="assets/img/shape/sec-title-2.png" alt="Bölüm Şekli Simgesi"></div>
        </div>
        <div class="row justify-content text-center">
           <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <form action="#" class="appointment-form1 px-10 py-10 px-sm-30 py-sm-30 px-xl-80 py-xl-80 bg-white">
                    <div class="form-title text-center mb-30">
                        <p class="text-font3" style="color:black;">
                            <font style="vertical-align: inherit;">ZCatering ile hayatınıza lezzet katmak için lütfen formu doldurunuz. </font>
</p>
<p> Firmamız çeşitli yemek plan ve programları ile bütün işletmelere özel, çözüm odaklı çalışmaktadır. </p>
                    </div>
                    <div class="form-group mb-20"><input type="text" class="form-control" placeholder="Adınız Soyadınız"> <i
                            class="fal fa-user"></i></div>
                    <div class="form-group mb-20"><input type="text" class="form-control" placeholder="Firma Adı"> <i class="fas fa-briefcase"></i></div>
                    <div class="form-group mb-20"><input type="number" class="form-control"
                            placeholder="İletişim numarası"> <i class="fal fa-phone"></i></div>
                            <div class="form-group mb-20"><input type="number" class="form-control"
                            placeholder="Mesajınız" col="3"> <i class="fa fa-envelope"></i></div>
                    <div class="form-btn"><button type="submit" class="vs-btn mask-style1 rounded-0 w-100">
                            <font style="vertical-align: inherit;">Gönder </font>
                        </button></div>
                </form>
            </div>
        </div>
    </div>
</section>