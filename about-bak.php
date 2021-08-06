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
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85807/jquery.flexslider.js">
        </script>
    </head>
    <body class="about">
        <section id="content">
            <?php
            // $logo= "logo-w";
            include_once(BASE_PATH."includes/navigation.php");
            ?>
            <div class="about-hero-module">
                <div class="video-container">
                    <div class="title-container">
                        <div class="color-overlay"> </div>
                        <div class="title-container-wrap">
                            <div class="container element_fade_in">
                                <h2 class="section-heading">Who we are</h2>
                                <p >
                                    <b>We - a small full-stack team of ingenious designers and developers, offering digital solutions and consulting services to organizations and businesses of all sizes big and small.</b><br>
                                    Ddeveloperz came from the idea of being different, cutting through the creative industry and making a real difference in how we satisfy our clients by producing simple elegant solutions to complex problems. We believe in what we do, and work with clients who are as passionate as we are in achieving the very best outcomes.<br>
                                    Working in collaboration with clients, we aim to build not just a product but memorable and unique user experiences.
                                    <br>
                                    Our passion in all things design - and keeping ahead of the latest technologies, along with a dose of constant curiosity - that is what makes us unique as an original creative agency.
                                </p>
                                <a href="about.php#our-team" class="line-button icon-arrow-right3">
                                    <span class="LineAnimation-border LineAnimation-border--top"></span>
                                    <span class="LineAnimation-border LineAnimation-border--right"></span>
                                    <span class="LineAnimation-border LineAnimation-border--bottom"></span>
                                    <span class="LineAnimation-border LineAnimation-border--bottom_left"></span>
                                    <span class="LineAnimation-border LineAnimation-border--top_left"></span>
                                Meet our team   </a>
                            </div>
                        </div>
                    </div>
                    <video autoplay loop class="fillWidth">
                        <source src="images/about-cover.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                    </video>
                </div>
            </div>
            <div id="how-we-work" class="sub-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading colored"  data-top-bottom="transform: translateY(-30px)" data-bottom-top="transform: translateY(30px)">How we work</h2>
                        </div>
                        <div class="col-lg-12 text-center">
                            <h3 class="big-text">As we will be working alongside you as a partnership, it is only natural for you to be fully involved in the design process. We will work together to go through a simple, effective process of eight stages:
                            </h3>
                        </div>
                    </div><div class="row ">
                    <div class="col-lg-3 element_from_bottom">
                        <strong><span>1</span>Discussion</strong>
                        <p> Before we proceed, we take time to discuss important matters with our clients. This is our means to discuss expected goals, strategy building, share things that needed to be achieve knowing their demands and purpose.
                        </p>
                    </div>
                    <div class="col-lg-3 element_from_bottom">
                        <strong><span>2</span>Research</strong>
                        <p>Next process is research wherein this includes researching about the business, checking competitors, learning more about the market and more. Conducting a thorough research helps in finding the right solutions that the clients need.
                        </p>
                    </div>
                    <div class="col-lg-3 element_from_bottom">
                        <strong><span>3</span>Quote Approval</strong>
                        <p>After Research, we send quotes with different packages for approval. Clients are free to choose the one that suits their available budget.
                        </p>
                    </div>
                    <div class="col-lg-3 element_from_bottom">
                        <strong><span>4</span>Design</strong>
                        <p>We then work on the design phase wherein we figure out the best ideas, concepts and methodologies to use. This is also the phase wherein we bring initial design drafts, wire-framing and prototyping. </p>
                    </div>
                </div>
                <div class="row"><div class="col-lg-3 element_from_bottom">
                    <strong><span>5</span>Review</strong>
                    <p>During this process, we discuss initial drafts, explain the concepts and then we collect initial review and finally settle on one ideal concept. We are preparing for the first launch.
                    </p>
                </div>
                <div class="col-lg-3 element_from_bottom">
                    <strong><span>6</span>First Launch</strong>
                    <p>This phase is all about actual development considering initial reviews into reference. We will now see how the products go live . During this process we, will also collect feedbacks and reviews from clients and be ready for the final touches or revisions.
                    </p>
                </div>
                <div class="col-lg-3 element_from_bottom">
                    <strong><span>7</span>Revision</strong>
                    <p> The main goal of this process is to gather as many modifications together as possible and then work on them. The general number of revisions, or rounds, is three but depending on relationship that number may vary.
                    </p>
                </div>
                <div class="col-lg-3 element_from_bottom">
                    <strong><span>8</span>Final Launch</strong>
                    <p>The final launch is now executed and clients are expected to love the work and willing to share their positive feedbacks.
                    </p>
                </div>
            </div>
            <div class="text-center row element_from_bottom">
                <div class="col-md-12"><a href="services.php" class="line-button icon-arrow-right3 dark">
                    <span class="LineAnimation-border LineAnimation-border--top"></span>
                    <span class="LineAnimation-border LineAnimation-border--right"></span>
                    <span class="LineAnimation-border LineAnimation-border--bottom"></span>
                    <span class="LineAnimation-border LineAnimation-border--bottom_left"></span>
                    <span class="LineAnimation-border LineAnimation-border--top_left"></span>
                Services we offer</a></div> </div>
            </div>
        </div>
        <div id="our-team" class="sub-section">
            <div class="container element_from_bottom">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading colored"  data-top-bottom="transform: translateY(-30px)" data-bottom-top="transform: translateY(30px)">Our CREW</h2>
                    </div>
                </div>
                <div class="row text-center team-group">
                    <div class="col-xs-6 col-md-3">
                        <img src="images/bachiter.jpg">
                        <strong>Bachiter Singh</strong>
                        <i>Digital &amp; Sales</i>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <img src="images/ramit.jpg">
                        <strong>Ramit Arora</strong>
                        <i> Product Management</i>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <img src="images/hargurpreet.jpg">
                        <strong>Hargurpreet Singh</strong>
                        <i>SW/Backend development</i>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <img src="images/pardeep.jpg">
                        <strong>Pardeep Singh</strong>
                        <i> Front-end development</i>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <img src="images/gurwinder.jpg">
                        <strong>Gurwinder Singh</strong>
                        <i> Back-end Development</i>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <img src="images/jasmeet.jpg">
                        <strong>Jasmeet Kaur</strong>
                        <i>Social &amp; Web marketing</i>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <img src="images/rustam3.jpg">
                        <strong>Rustamveer Singh</strong>
                        <i> DBA, Security & System Engineering</i>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <img src="images/hardeep.jpg">
                        <strong>Hardeep Singh</strong>
                        <i> Graphic Design</i>
                    </div>
                    <!-- <div class="col-xs-6 col-md-3">
                        <img src="images/simarjot.jpg">
                        <strong>Simarjot Singh</strong>
                        <i> Full Stack Development</i>
                    </div> -->
                </div>
                <div class="text-center row element_from_bottom">
                    <div class="col-md-12"><a href="contact.php" class="line-button icon-arrow-right3 dark">
                        <span class="LineAnimation-border LineAnimation-border--top"></span>
                        <span class="LineAnimation-border LineAnimation-border--right"></span>
                        <span class="LineAnimation-border LineAnimation-border--bottom"></span>
                        <span class="LineAnimation-border LineAnimation-border--bottom_left"></span>
                        <span class="LineAnimation-border LineAnimation-border--top_left"></span>
                    Lets talk</a></div> </div>
                </div>
            </div>
            <div id="testimonials" class="sub-section">
                <div class="container">
                    <div class="row element_from_bottom">
                        <div class="col-lg-12 text-center ddz-testimonials-wrapper">
                            <h2 class="section-heading" data-top-bottom="transform: translateY(-30px)" data-bottom-top="transform: translateY(30px)" >Testimonials</h2>
                            <ul class="ddz-testimonials">
                                <li>
                                    <p>
                                        "It was a pleasure doing business with Ddeveloperz. I found it to be very responsive to my needs and delivered the final project on time and most important of all exactly to my needs and requirements. Well done &amp; keep up the good work!"
                                        <strong>Veronica, <span>Join Our Class</span></strong>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        "The best choice if you want a custom-built php cross-browser site. Ddeveloperz is very good in making custom php websites and he is very nice to work with. You can trust ddeveloperz to do is best and help you all the way through with great support, availability, communication and cooperation. This team from India is a great choice. Very committed and trustworthy.
                                        "
                                        <strong>Dan Alex, <span>AutoDell</span></strong>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        "Ddeveloperz team did outstanding work and was very responsive, and was constantly available. I couldn't ask for anything more on this job. Great work all around!"
                                        <strong>Rob, <span>Orracle Media</span></strong>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        "Working with Ddeveloperz team has been a pleasure. They have consistently delivered excellent work quality and even contributed to the project with ideas that we have implemented! Highly recommended and we would defiantly use again."
                                        <strong>Jaginder, <span>Dragonsnet</span></strong>
                                    </p>
                                </li>
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
        jQuery(document).ready(function($){
        //create the slider
        $('.ddz-testimonials-wrapper').flexslider({
        selector: ".ddz-testimonials > li",
        animation: "slide",
        controlNav: false,
        slideshow: true,
        smoothHeight: true,
        directionNav: false,
        start: function(){
        $('.ddz-testimonials').children('li').css({
        'opacity': 1,
        'position': 'relative'
        });
        }
        });
        //open the testimonials modal page
        $('.cd-see-all').on('click', function(){
        $('.cd-testimonials-all').addClass('is-visible');
        });
        //close the testimonials modal page
        $('.cd-testimonials-all .close-btn').on('click', function(){
        $('.cd-testimonials-all').removeClass('is-visible');
        });
        $(document).keyup(function(event){
        //check if user has pressed 'Esc'
        if(event.which=='27'){
        $('.cd-testimonials-all').removeClass('is-visible');
        }
        });
        //build the grid for the testimonials modal page
        // $('.cd-testimonials-all-wrapper').children('ul').masonry({
        // itemSelector: '.cd-testimonials-item'
        // });
        });
        </script>
    </body>
</html>
