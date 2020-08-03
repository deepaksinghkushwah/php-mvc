

<section once="footers" class="cid-s6zQLYW2dh" id="footer7-3">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Services</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Get In Touch</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Careers</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Work</a>
                    </li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2020 Owner Of Site - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="<?=SITE_URL.'public/'?>assets/web/assets/jquery/jquery.min.js"></script>
  <script src="<?=SITE_URL.'public/'?>assets/popper/popper.min.js"></script>
  <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
  <script src="https://apis.google.com/js/plusone.js"></script>
  <script src="<?=SITE_URL.'public/'?>assets/facebook-plugin/facebook-script.js"></script>
  <script src="<?=SITE_URL.'public/'?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=SITE_URL.'public/'?>assets/smoothscroll/smooth-scroll.js"></script>
  <script src="<?=SITE_URL.'public/'?>assets/dropdown/js/nav-dropdown.js"></script>
  <script src="<?=SITE_URL.'public/'?>assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="<?=SITE_URL.'public/'?>assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="<?=SITE_URL.'public/'?>assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="<?=SITE_URL.'public/'?>assets/tether/tether.min.js"></script>
  <script src="<?=SITE_URL.'public/'?>assets/theme/js/script.js"></script>
  <?php
if (isset($this->js)) {
    foreach ($this->js as $js) {
        if ($js['pos'] == 'bottom') {
            ?>
            <script src="<?= $js['src'] ?>"></script>
            <?php
        }
    }
}

?>
  
</body>
</html>

