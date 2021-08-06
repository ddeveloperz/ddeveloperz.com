<body class="portfolio <?=$project_name?>">
   <style>
 .<?=$project_name?>{<?=$project_color?>}
 .button{<?=$project_color?>}
 svg:not(:root), .svg-diagonal {
    overflow: hidden;
    width: 100%;
}

svg:not(:root) {
    overflow: hidden;
}

.footer-poly {
    bottom: -90px;
    left: 0;
    position: absolute;
    z-index: 10;
}

svg {
    max-height: 100%;
}
nav.sticky{

    background: <?=$bg_color?> !important}
.line-button.dark.active, .line-button.dark.active:before{color:<?=$bg_color?> }
.line-button.dark .LineAnimation-border{background-color: <?=$bg_color?>}

</style>
    <?php
    $logo= "logo-w";
    include_once(BASE_PATH."includes/navigation.php");
    ?>

    <div class="portfolio-item">
    <div class="portfolio-head">
        <div class="container">
            <?php $project_name1 = str_replace('-', ' ', $project_name); ?>
            <h2 class=""><?=$project_name1?></h2>
           <div class="text-center"><a href="<?=SITE_URL?>recent-work.php" class="arrow-effect left"> <span class="icon-arrow-left3" ></span> Recent Work</a></div>
        </div>
<svg version="1.1" class="svg-diagonal  footer-poly" height="100" x="0px" y="0px" viewBox="0 0 1903 80" enable-background="new 0 0 1903 80" xml:space="preserve" preserveAspectRatio="none">

<g><polygon fill-rule="evenodd" clip-rule="evenodd" fill="<?= $bg_color ?> " points="2200,0 0,0 0,80"></polygon></g>

          </svg>
    </div>
    <!-- Portfolio Grid Section -->
    <section id="content">
        <div class="description-box">
            <div class="description-box-bg">
            </div>
            <div class="container">
                <div class="col-md-8 overview">
                    <p><em><?=$project_overview?></em></p>
                </div><div class="col-md-4 overview-techs">
                <div class="block">
                    <strong>Type:</strong>
                    <ul>
                        <li><?=$project_type?></li>
                    </ul>
                </div>
                <div class="block">
                    <strong>Services:</strong>
                    <?=$project_services?>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container ">
        <img src="<?=SITE_URL?>recent-work/<?=$project_name?>/cover.jpg" class="img-responsive">
    </div>
    <div class="container display-screen" >
        <div class="row">
            <div class="col-md-12">
                <!--   <div class="sigle-portfolio-item-imac">
                    <div class="screen" style="background-image: url(images/cpfull.jpg);"></div>
                </div> -->
                <!--  <img src="images/our-work/brpaper/browser1.jpg"  class="img-responsive"> -->
                <img src="<?=SITE_URL?>recent-work/<?=$project_name?>/browser.jpg"  class="img-responsive">
            </div>
        </div>
    </div>
    <div class="portfolio-bottom">
        <div class="container mobile-shots">
            <div class="row text-center">
                <div class="col-md-12">
                    <?=$project_description?>
                </div>
                <div class="col-sm-6 text-center"><img src="<?=SITE_URL?>recent-work/<?=$project_name?>/mobile1.jpg" alt="" class="img-responsive"></div>
                <div class="col-sm-6 text-center"><img src="<?=SITE_URL?>recent-work/<?=$project_name?>/mobile2.jpg" class="img-responsive"></div>
            </div>
        </div>
          <div class="text-center project-launch-cta">
          <a href="<?=$project_url?>" target="_blank" class="line-button icon-arrow-right3 dark active">
                                    <span class="LineAnimation-border LineAnimation-border--top"></span>
                                    <span class="LineAnimation-border LineAnimation-border--right"></span>
                                    <span class="LineAnimation-border LineAnimation-border--bottom"></span>
                                    <span class="LineAnimation-border LineAnimation-border--bottom_left"></span>
                                    <span class="LineAnimation-border LineAnimation-border--top_left"></span>
                                Launch Project  </a>

              <!--                    <a class="button" href="<?=$project_url?>" target="_blank">
        <span class="normal">Launch Project</span>
        <span class="hover">Launch Project</span>
    </a> -->
    </div>

    <div class="fluid-container"><div class="prev-next row">
        <div class="prev col-xs-6"><a href="<?=SITE_URL?>recent-work/<?=$prev_project_name?>" class="arrow-effect left" ><span class="icon-arrow-left3"></span> Previous Project</a></div>
        <div class="next col-xs-6"><a href="<?=SITE_URL?>recent-work/<?=$next_project_name?>" class="arrow-effect right" >Next Project <span class="icon-arrow-right3"></span></a></div>
    </div>
    </div>
    </div>

</section>
</div>
<!-- Portfolio Modal @24-->
<?php
include_once(BASE_PATH."includes/footer.php");
?>
<script src="<?=SITE_URL?>js/script.js"></script>
</body>
</html>
