<!DOCTYPE HTML>
<html>
    <head>
        <?php
        include_once("init.php");
        $pagetitle = "About Ddeveloperz: Services | Process | Team ";
        $description = "Your Meta Description";
        $keywords = "Your Keywords";
        include_once(BASE_PATH."includes/dependencies.php");
        ?>
    </head>
    <body class="services">
        <?php
        include_once(BASE_PATH."includes/navigation.php");
        ?>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading colored">Our Services</h2>
                    </div>
                </div>
            </div>
            <div id="digital-section" class="services-section element_from_bottom">
                <div class="container">
                    <h2>Digital</h2>

                    <div class="row">
                        <div class="col-md-12">
                            <p>
                              Our company specialises in complete range of digital services and we guarantee clients with the most effective solutions to their digital marketing needs. We have the best team of technologists, designers and strategists helping clients and businesses turn their ideas to transformation digital businesses. We are one of the leading leaders in digital business building and digital innovation.  </p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="images/digital-cover.jpg" class="img-responsive">

                            </div>
                        </div>
                        <div class="row">
<div class="col-md-12">    <strong>Our exclusive digital services include:</strong></div>
                            <div class="col-md-4">

                                <ul>
                                    <li>Full Stack development</li>
                                    <li>Responsive / Adaptive Design</li>
                                    <li>Web applications</li>
                                    <li>Back-office development</li>
                                    <li>Mobile Development</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li>E-commerce development</li>
                                    <li>Wordpress development</li>
                                    <li>Magento development</li>
                                    <li>Content Management System</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li>Landing Page Design</li>
                                    <li>Custom solutions</li>
                                    <li>Wireframing &amp; prototyping</li>
                                    <li>Re-styling websites</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="creative-section" class="services-section element_from_bottom">
                    <div class="container">
                        <h2>Creative</h2>


                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    Looking for an exclusive brand identity - we are here to give you a hand. Our creative designers will help you to create a unique brand status that allows you to convey the real motive of your business by attracting  the target customers. So here is an oppurtunity to stand out in a competitive market.
                                    </p></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="images/creative-cover.jpg" class="img-responsive">

                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">    <strong>Our Creative services include: </strong></div>
                                <div class="col-md-4">
                                    <ul>
                                        <li>Brand Identity</li>
                                        <li>Corporate Identity</li>
                                        <li>Print media design</li>
                                        <li>Icon Design</li>
                                        <li>Email Design</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li> UX design for digital </li>
                                        <li> Design Consultancy</li>
                                        <li>Design Research</li>
                                        <li>Style Guide</li>
                                         <li>CAD / CAM</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li>Motion graphics design</li>
                                        <li>Digital animation</li>
                                        <li>Presentations </li>
                                        <li>Info-graphic</li>
                                        <li>Story Telling</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ew-section" class="services-section element_from_bottom">
                        <div class="container">
                            <h2>Everything web</h2>


                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                       Our company also offers complete range of web services especially designed to help clients re-imagine and then capture newest digital opportunities and to also strengthen performance of existing capabilities and digital assets. </p></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="images/ew-cover.jpg" class="img-responsive">

                                    </div>

                                </div>
                                <div class="row">
                                <div class="col-md-12">   <strong>Our Everything Web services include: </strong></div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li>Payment gateways</li>
                                            <li>SMS Gateways</li>
                                            <li>Mail Chimp</li>
                                            <li>Google maps API</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <!--   <li>Content management system Setup</li> -->
                                            <li>Website Maintenance </li>
                                            <li>SEO</li>
                                            <li>SSL Installation</li>
                                            <li>Domain &amp; site transfer</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <!--   <li>Website content management</li> -->
                                            <li>Digital Marketing</li>
                                            <li>Git setup</li>
                                            <li>Web Analytics</li>
                                            <li>Site improvement / optimization</li>
                                            <li>Content Creation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php
                    include_once(BASE_PATH."includes/footer.php");
                    ?>
                    <script src="<?=SITE_URL?>js/script.js"></script>
                       <script>
    var offset = 5;
        $(window).scroll(function(){
        $('.services-section img').each(function(ind, ele) {
    var $elem = $(ele),
        topDist = $elem.offset().top - $(window).scrollTop(),
        bottomDist = $elem.offset().top + $elem.height() - $(window).scrollTop();

    if (topDist < offset && bottomDist > offset) {
        // (turn on colors)
        $elem.removeClass('grayed');
    } else {
        // (turn off colors)
        $elem.addClass('grayed');
    }
    });
});
    </script>
                </body>
            </html>
