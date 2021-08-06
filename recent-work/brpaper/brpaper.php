<!DOCTYPE HTML>
<html>
    <head>
 
        <?php
        include_once("../../init.php");
        $pagetitle = "Ddeveloperz: Our Portfolio";
        $description = "Your Meta Description";
        $keywords = "Your Keywords";
        include_once(BASE_PATH."includes/dependencies.php");
        ?>
    </head>
    <body class="portfolio brpaper">
        <?php
        include_once(BASE_PATH."includes/navigation.php");
        ?>
        <div class="portfolio-item brpaper">        <!-- Header -->
        <div class="portfolio-head">
            <div class="container">
                <h2 class="">Br paper</h2>
            </div>
        </div>
        <!-- Portfolio Grid Section -->
        <section>
            <div class="description-box">
                <div class="description-box-bg">
                </div>
                <div class="container">
                    <div class="col-md-8 overview">
                        <p>When Paper Moose, an award winning creative agency from Sydney asked us to develop them a website, we knew it had to be visually stunning.
                            When Paper Moose, an award winning creative agency from Sydney asked us to develop them a website, we knew it had to be visually stunning.
                            When Paper Moose, an award winning creative agency from Sydney asked us to develop them a website, we knew it had to be visually stunning.
                        </p>
                    </div><div class="col-md-4 overview-techs">
                    <div class="block">
                        <strong>Type:</strong>
                        <ul>
                            <li>Non-profit Educational portal</li>
                        </ul>
                    </div>
                    <div class="block">
                        <strong>Services:</strong>
                        <ul>
                            <li>Branding</li>
                            <li>Front &amp; Back-end Development</li>
                            <li>Back-office Design</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fluid-container ">
            <img src="images/our-work/brpaper/cover.jpg" class="img-responsive">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--   <div class="sigle-portfolio-item-imac">
                        <div class="screen" style="background-image: url(images/cpfull.jpg);"></div>
                    </div> -->
                    <!--  <img src="images/our-work/brpaper/browser1.jpg"  class="img-responsive"> -->
                    <img src="images/our-work/brpaper/browser2.jpg"  class="img-responsive">
                </div>
            </div>
        </div>
        <div class="portfolio-bottom">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h5>Built Like An Iceberg</h5>
                        <p>
                            The sexy portions of most sites are the front-end, consumer-facing pages, but this site had two distinct audiences: stylists throughout the world who were vying to be recognized for their talents and the internal team at Revlon that would be judging the contest.
                        We put as much work into making the control panel for the judges as easy to use as the homepage, knowing that the majority of the use was actually happening in areas that only users with passwords would see. There were details in every aspect of the site, from the way it was architected to the pixels that displayed on screen, that needed the polish typically reserved for a site’s homepage</p>
                    </div>
                    <div class="col-md-6 text-center"><img src="images/our-work/brpaper/mobile1.png" alt="" width="500"></div>
                    <div class="col-md-6 text-center"><img src="images/our-work/brpaper/mobile2.png" width="500"></div>
                </div>
            </div>
        </div>

  <a class="button">
    <span class="normal">Find Out</span>
     <span class="hover">Find Out</span>
  </a>

    </section>
</div>
<!-- Portfolio Modal @24-->
<?php
include_once(BASE_PATH."includes/footer.php");
?>
<script src="<?=SITE_URL?>js/script.js"></script>
</body>
</html>
