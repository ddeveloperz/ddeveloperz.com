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
    <body class="get-quote">
        <?php

        include_once("includes/navigation.php");
        ?>
        <!-- Header -->
        <!-- contact Section -->
        <section >
            <div class="container" id="contact-form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center"><h2 class="section-heading">CONTACT </h2>

                         <div class="col-md-4 info">
<h2 class="big_text element_from_left">Lets <span>Talk</span></h2>
<div class="block">
<p>We’d love to discuss your business needs and how we can help.</p>
<strong>Send an email</strong>
<a href="mailto:contact@ddeveloperz.com">contact@ddeveloperz.com</a></div>
<div class="block">
<strong>Get Social</strong>
   <ul class="social">
                                <li>
                                    <a target="_blank" href="http://facebook.com/ddeveloperz" class="icon-facebook2"></a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://instagram.com/ddeveloperz" class="icon-instagram"></a>
                                </li>
                            </ul>
                        </div></div>
                         <div class="col-md-8">
                        <form name="sentMessage" id="contactForm" action="javaScript:void(0)" method="post" class="element_from_bottom">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input tabindex="1" type="text" class="is_required" placeholder="Name *" id="name" name="name">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input tabindex="2" type="email" class="is_required is_email" placeholder="Email *" id="email" name="email">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input tabindex="3" type="text" class="is_required" placeholder="Company" id="company-name" name="company">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                       <select tabindex="4" name="subject"  class="is_required form-control dropdown placeholder">
                                       <option value="" disabled selected>Select your option</option>
                                           <option>Inquiry related to your new project</option>
                                              <option>Just saying hello</option>
                                                <option>About how much you love us</option>

                                       </select>
                                        <p class="help-block text-danger"></p>
                                    </div>

                                    <div class="form-group">
                                        <textarea tabindex="5" class="empty" name="message" placeholder="Any additional details?" id="message" ></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-right">
                                    <div class="form-group">
                                        <button type="submit" class="line-button icon-arrow-right3 active">
                                            <span class="LineAnimation-border LineAnimation-border--top"></span>
                                            <span class="LineAnimation-border LineAnimation-border--right"></span>
                                            <span class="LineAnimation-border LineAnimation-border--bottom"></span>
                                            <span class="LineAnimation-border LineAnimation-border--bottom_left"></span>
                                            <span class="LineAnimation-border LineAnimation-border--top_left"></span>
                                       Contact us</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-12 text-right">
                                    <div class="form-group">
                                        <div id="success"></div>
                                    </div>
                                </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Send email  -->
        <script type="text/javascript">
        $("#contactForm").submit(function(){
 ths=this;
 var return_value=true;


 $(ths).find('.is_email').each(function(index, element) {

  element_value=$.trim($(element).val());
  var atpos=element_value.indexOf("@");
  var dotpos=element_value.lastIndexOf(".");
  if(atpos < 1 || dotpos < atpos+2 || dotpos+2 >= element_value.length)
  {
      $(element).addClass('invalid');
      return_value=false;
  }
  else
  {
 $(element).removeClass('invalid');
  }
    });

 $(ths).find('.is_required').each(function(index, element) {

  element_value=$.trim($(element).val());
  if(element_value == '')
  {
      $(element).addClass('invalid');
      return_value=false;
  }
  else
  {
 $(element).removeClass('invalid');
  }

    });


$('input.invalid:first').focus();


if(return_value===false)
{
  return return_value;
}

        $.ajax({
        url:'contact-process.php',
        type:"POST",
        data:$(ths).serializeArray(),
        success: function(result){
        $("#success").css('display','block').html(result);
        $("#contactForm").fadeOut('fast');
        }
        })
        });
        </script>
        <script type="text/javascript">

    </script>
        <?php
        include_once(BASE_PATH."includes/contact-footer.php");
        ?>
<script>
    jQuery(".dropdown").change(function () {
    jQuery(this).removeClass("placeholder");
});
$('textarea').focusout(function() {
  if ($(this).val() == '') { $(this).addClass('empty'); }
  else { $(this).removeClass('empty'); }
  });

</script>
        <script src="<?=SITE_URL?>js/script.js"></script>
    </body>
</html>
