<!DOCTYPE HTML>
<html>
  <head>
    <?php
        include_once("init.php");

    $pagetitle = "Ddeveloperz: Our Portfolio";
    $description = "Your Meta Description";
    $keywords = "Your Keywords";
      include_once(BASE_PATH."includes/dependencies.php");
    ?>
  </head>
  <body class="recent-work">
    <?php
       include_once(BASE_PATH."includes/navigation.php");
    ?>
    <!-- Portfolio Grid Section -->
    <section  id="content">
      <div class="container">
        <div class="row" >
          <div class="col-lg-12">
            <h2 class="section-heading colored">Recent Work</h2>
          <h3 class="big-text element_from_bottom text-center">
Every project is different, and every client has different needs. We're not just building a product, we're building an experience and we want that to be a meaningful and lasting one.</h3>
          </div>
        </div>
      </div>
      <div class="fluid-container">
        <div class="row portfolio-images element_from_bottom">

       <div class="col-md-6">
            <div class="portfolio-item">
              <a href="recent-work/delicate-gem/"> <div class="portfolio-image-overlay">
                <div class="portfolio-content"><h2 class="heading">Delicate Gem</h2>
                  <span class="link">Case Study</span>
                </div>
              </div>
            <img src="<?=SITE_URL?>recent-work/delicate-gem/thumb.jpg" class="img-responsive" alt="" /></a>
          </div>
        </div>
          <div class="col-md-6">
            <div class="portfolio-item">
              <a href="recent-work/brpaper/"> <div class="portfolio-image-overlay">
                <div class="portfolio-content"><h2 class="heading">Br paper</h2>
                  <span class="link">Case Study</span>
                </div>
              </div>
            <img src="<?=SITE_URL?>recent-work/brpaper/thumb.jpg" class="img-responsive" alt="" /></a>
          </div>
        </div>
        <div class="col-md-6">
            <div class="portfolio-item">
              <a href="recent-work/angelinos-coffee/"> <div class="portfolio-image-overlay">
                <div class="portfolio-content"><h2 class="heading">Angelinos Coffee</h2>
                  <span class="link">Case Study</span>
                </div>
              </div>
            <img src="<?=SITE_URL?>recent-work/angelinos-coffee/thumb.jpg" class="img-responsive" alt="" /></a>
          </div>
        </div>
        <div class="col-md-6">
            <div class="portfolio-item">
              <a href="recent-work/scholl-bikes/"> <div class="portfolio-image-overlay">
                <div class="portfolio-content"><h2 class="heading">Scholl Bikes</h2>
                  <span class="link">Case Study</span>
                </div>
              </div>
            <img src="<?=SITE_URL?>recent-work/scholl-bikes/thumb.jpg" class="img-responsive" alt="" /></a>
          </div>
        </div>
         <div class="col-md-6">
            <div class="portfolio-item">
              <a href="recent-work/fine-tuxedos/"> <div class="portfolio-image-overlay">
                <div class="portfolio-content"><h2 class="heading">Fine Tuxedos</h2>
                  <span class="link">Case Study</span>
                </div>
              </div>
            <img src="<?=SITE_URL?>recent-work/fine-tuxedos/thumb.jpg" class="img-responsive" alt="" /></a>
          </div>
        </div>


    </div>
  </div>
</section>
<!-- Portfolio Modal @24-->
<?php
    include_once(BASE_PATH."includes/footer.php");
?>
        <script src="<?=SITE_URL?>js/script.js"></script>
</body>
</html>
