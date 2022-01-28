<footer class="footer-wrapper footer-layout1 dark-footer bg-black">
        <div class="footer-widget-wrapper footer-widget-layout1 pt-40 pt-lg-100 pb-10 pb-lg-70 background-image bg-auto bg-bottom" data-vs-img="assets/img/footer/fire.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-xl-4">
                        <div class="widget pt-0">
                            <div class="vs-widget-about">
                                <div class="widget-about-logo mb-20 mb-lg-25"><a href="index.php"><img src="assets/img/logo.png" alt="Clianio"></a></div>
                                <p class="widget-about-text mb-20">
                                    <?php echo $ayarYaz['facility_slogan'];?>
                                </p>
                                <div class="social-links links-has-border">
                                    <ul>
                                        <li><a href="<?php echo $ayarYaz['facility_facebook']?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo $ayarYaz['facility_twitter']?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?php echo $ayarYaz['facility_instagram']?>"><i class="fab fa-instagram"></i></a></li>
                                        
                                        <li><a href="<?php echo $ayarYaz['facilit']?>"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget_title">Hızlı Ulaşım</h3>
                            <div class="menu-all-pages-container">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-12 col-xl-6">
                                        <ul class="menu">
                                            <li><a href="index.php">Anasayfa</a></li>
                                            <li><a href="kurumsal.php">Kurumsal</a></li>
                                            <li><a href="referanslarimiz.php">Referanslarımız</a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-lg-12 col-xl-6">
                                        <ul class="menu">
                                        <li><a href="galeri.php">Galeri</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="iletisim.php">İletişim</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget_title">İletişim</h3>
                            <div class="menu-all-pages-container">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-12 col-xl-12">
                                        <ul class="menu">
                                            <li><i
                                class="fal fa-map-marker-alt text-md mb-10"></i> <?php echo $ayarYaz['address1'];?></li><br>
                                            <li><i
                                class="fal fa-phone-alt text-md mb-10"></i> <?php echo $ayarYaz['number'];?></li><br>
                                            <li><i
                                class="fal fa-envelope text-md mb-10"></i> <?php echo $ayarYaz['facility_mail'];?>
 </li>
                                            
                                        </ul>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div> 
        </div>
        <div class="footer-copyright bg-dark text-center py-3 link-inherit">
            <div class="container">
                <p class="text-white mb-0"> <a href="https://www.tonyukukajans.com/">
                    <img src="tonyukuklogo.png" width="150px">
                </a></p>
            </div> 
        </div>
    </footer>
    <a href="#" class="scrollToTop icon-btn bg-theme border-before-theme"><i class="far fa-angle-up"></i></a>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/vscustom-carousel.min.js"></script>
    <script src="assets/js/vsmenu.min.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="../../../maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="assets/js/main.js"></script>
    <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "08504665834", // WhatsApp number
            call_to_action: "Bize mesaj gönderin", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
</body>

</html>