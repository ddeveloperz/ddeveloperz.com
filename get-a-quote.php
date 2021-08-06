<!DOCTYPE HTML>
<html>
    <head>
        <?php
        $pagetitle = "Get a quote";
        $description = "Your Meta Description";
        $keywords = "Your Keywords";
        include_once("includes/dependencies.php");
    ?> </head>
    <body>
        <?php
        include_once("includes/navigation.php");
        ?>
        <!-- Header -->
        <header>
            <div class="overlay">
                <div class="container">
                </div>
            </div>
        </header>
        <!-- contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 page-intro text-center">
                        <h2 class="section-heading">Get in touch</h2>
                    </div>
                </div>
            </div>
            <article id="contact-form">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="section-heading">Write to us:</h2>
                            <form name="sentMessage" id="contactForm" action="javaScript:void(0)" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." name="name">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." name="email">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject*" id="subject" required data-validation-required-message="Please enter subject." name="subject">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message." rows="8"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-right">
                                        <div class="form-group">
                                            <div id="success"></div>
                                            <input type="submit" value="Send" class="btn btn-lg" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <!-- Send email  -->
        <script type="text/javascript">
        $("#contactForm").submit(function(){
        $.ajax({
        url:'contact-process.php',
        type:"POST",
        data:$(this).serializeArray(),
        success: function(result){
        $("#success").css('display','block').text(result);
        }
        })
        });
        </script>
        <?php
        include_once("includes/footer.php");
        ?>
    </body>
</html>
