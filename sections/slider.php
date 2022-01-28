<section class="vs-hero-wrapper vs-hero-layout2">
    <?php 
$slidersor=$db->prepare("SELECT * FROM galleries 
where domain='zcatering.com' && category='banner'");
$slidersor->execute(array());

?>

    <div class="vs-hero-carousel navprevnext-white navbuttons-white" data-height="750px" data-slidertype="fullwidth"
        data-navbuttons="true" data-navprevnext="true">

        <?php while($slideryaz=$slidersor->fetch(PDO::FETCH_ASSOC)){

        ?>
        <div class="vs-hero-slide ls-slide" data-ls="duration: 7000; transition2d: 5;"><img
                src="https://tonyukukserver.com/cms/storage/<?php echo $slideryaz['image']?>" alt="Slide Image"
                class="ls-bg"> <span class="hero-subtitle text-white text-font3 h1 ls-l"
                style="left: 50%; top: 325px; font-size: 48px; white-space: normal; width: 860px; text-align: center;"
                data-ls="offsetxin: -200; durationin: 1000; delayin: 600; easingin:easeOutQuint; offsetxout: -50; durationout: 1000;">Z
                Catering</span>
            <h1 class="hero-title text-white ls-l"
                style="left: 50%; top: 385px; width: 850px; font-size: 80px; white-space: normal; text-align: center; line-height: 90px;"
                data-ls="offsetxin: 100; durationin: 1000; delayin: 700; easingin:easeOutQuint; offsetxout: 50; durationout: 1000;">
                <?php echo $slideryaz['image_title']?></h1>
            <div class="hero-btn ls-l"
                style="left: 50%; top: 605px; width: 180px; height: 60px; overflow: hidden; border-radius: 50px; line-height: 60px; font-size: 18px;"
                data-ls="delayin: 1100; showinfo:1; durationin:2000; easingin:easeOutExpo; scalexin:1.5; scaleyin:1.7; scalexout:0; scaleyout: 0; fadein:false; fadeout: false; transformoriginin:50% 143.8% 0;">
                <a href="index.php#teklifal" class="vs-btn mask-style1">Teklif Al</a></div>
        </div>
        <?php }?>

    </div>
</section>