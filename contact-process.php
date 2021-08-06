<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $formsubject = trim($_POST["subject"]);
        $company=trim($_POST["company"]);
        $message = trim($_POST["message"]);
        $link="http://ddeveloperz.com";
        // Check that data was sent to the mailer.
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($formsubject)) {
            // Set a 400 (bad request) response code and exit.

            echo "Oops! There was a problem with your submission. </br> Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.

        // Set the email subject.






$ddmessage="<div class='ii gt m15289e6a731ddfcc adP adO' id=':z3'><div style='overflow: hidden;' class='a3s' id=':ze'><div class='adM'>
</div><div><div style='margin:0;padding:0;width:100%!important'><table cellspacing='0' cellpadding='0' border='0' style='border-collapse:collapse;margin:0;padding:0;background-color:#ffffff;color:#616161;font-size:1rem;font-family:'Roboto','RobotoLight','Helvetica Neue',Arial,Helvetica,sans-serif;font-weight:400;width:100%!important;line-height:100%!important'><tbody><tr><td style='border-collapse:collapse'>

<table cellspacing='0' cellpadding='0' border='0' style='border-collapse:collapse;margin:0;padding:0;background-color:#00AFF8;color:#ffffff;width:100%!important;line-height:100%!important'><tbody><tr><td style='border-collapse:collapse'><table cellspacing='0' cellpadding='0' border='0' align='center' style='border-collapse:collapse;margin:3em auto 2em;text-align:center'><tbody><tr>

<td width='600' valign='top' style='border-collapse:collapse'>

<img width='200'  title='Ddeveloperz' alt='Ddeveloperz' src='$link/images/logo-w.png'>

</td>
</tr></tbody></table></td></tr>

<tr><td style='border-collapse:collapse'><table cellspacing='0' cellpadding='0' border='0' align='center' style='border-collapse:collapse;margin-bottom:1.5em;text-align:center'><tbody><tr><td width='100' style='border-collapse:collapse'></td>

<td width='100' style='border-collapse:collapse'></td></tr></tbody></table></td></tr></tbody></table>
<table cellspacing='0' cellpadding='0' border='0' align='center' style='border-collapse:collapse;margin:3em auto 3em'><tbody><tr><td width='600' valign='top' style='padding:0 2em;border-collapse:collapse'><p style='margin:1.5em 0;font-size:1rem;font-weight:400;line-height:1.5'>Hey, Ddeveloperz!</p>
<p style='margin:1.5em 0;font-size:1rem;font-weight:400;line-height:1.5'>$name filled the form on your website:</p>
<p style='margin:1.5em 0;font-size:1rem;font-weight:400;line-height:1.5'><b style='color:#2878ff;text-decoration:none' >Message</b>: $message <br/>
<b style='color:#2878ff;text-decoration:none'>Email</b>: $email <br/>
<b style='color:#2878ff;text-decoration:none'>Company</b>: $company <br/>
<b style='color:#2878ff;text-decoration:none'>Subject</b>: $formsubject</p>



<p style='margin:1.5em 0;font-size:1rem;font-weight:400;line-height:1.5'></p><div>Best,</div> <div>Ddeveloperz</div><p></p></td></tr></tbody></table>

<table cellspacing='0' cellpadding='0' border='0' align='center' style='border-collapse:collapse;margin:1.5em auto 3em;text-align:center'><tbody><tr><td width='600' valign='top' style='border-collapse:collapse'><a href='#;' target='_blank'>Ddeveloperz</a></td></tr></tbody></table></td></tr></tbody></table></div></div></div><div class='yj6qo'></div></div>";


$to      = 'hello@ddeveloperz.com';

$subject = "New contact from $name";


$headers = "From: contact@ddeveloperz.com\r\n";

$headers .= "Reply-To: ". strip_tags($email) . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


if (mail($to, $subject,$ddmessage, $headers,"-f hello@ddeveloperz.com")) {
            // Set a 200 (okay) response code.
                   echo "Your message has been sent! </br> You will receive our response within 24 hours.";
        } else {
            // Set a 500 (internal server error) response code.
                       echo "Oops! Something went wrong and we couldn't send your message.";
        }





// $to      = $email;

// $subject = 'Thanks for submittion at Ddeveloperz';





// $usermsgtext="<div class='ii gt m15289e6a731ddfcc adP adO' id=':z3'><div style='overflow: hidden;' class='a3s' id=':ze'><div class='adM'>
// </div><div><div style='margin:0;padding:0;width:100%!important'><table cellspacing='0' cellpadding='0' border='0' style='border-collapse:collapse;margin:0;padding:0;background-color:#ffffff;color:#616161;font-size:1rem;font-family:'Roboto','RobotoLight','Helvetica Neue',Arial,Helvetica,sans-serif;font-weight:400;width:100%!important;line-height:100%!important'><tbody><tr><td style='border-collapse:collapse'><table cellspacing='0' cellpadding='0' border='0' style='border-collapse:collapse;margin:0;padding:0;background-color:#00AFF8;color:#ffffff;width:100%!important;line-height:100%!important'><tbody><tr><td style='border-collapse:collapse'><table cellspacing='0' cellpadding='0' border='0' align='center' style='border-collapse:collapse;margin:3em auto 2em;text-align:center'><tbody><tr><td width='600' valign='top' style='border-collapse:collapse'>

// <img width='200'  title='Ddeveloperz' alt='Ddeveloperz' src='$link/images/logo-w.png' style='outline:none;text-decoration:none' class='CToWUd'>

// </td></tr></tbody></table></td></tr>

// <tr><td style='border-collapse:collapse'><table cellspacing='0' cellpadding='0' border='0' align='center' style='border-collapse:collapse;margin-bottom:1.5em;text-align:center'><tbody><tr><td width='100' style='border-collapse:collapse'></td>

// <td width='100' style='border-collapse:collapse'></td></tr></tbody></table></td></tr></tbody></table>


// <table cellspacing='0' cellpadding='0' border='0' align='center' style='border-collapse:collapse;margin:3em auto 3em'><tbody><tr><td width='600' valign='top' style='padding:0 2em;border-collapse:collapse'><p style='margin:1.5em 0;font-size:1rem;font-weight:400;line-height:1.5'>Hey, $name !</p>


// <p style='margin:1.5em 0;font-size:1rem;font-weight:400;line-height:1.5'>Thanks for submitting the details on Ddeveloperz. We will get back to you shortly.</p>

// <p style='margin:1.5em 0;font-size:1rem;font-weight:400;line-height:1.5'></p><div>Best,</div> <div>The Ddeveloperz</div><p></p></td></tr></tbody></table>

// <table cellspacing='0' cellpadding='0' border='0' align='center' style='border-collapse:collapse;margin:1.5em auto 3em;text-align:center'><tbody><tr><td width='600' valign='top' style='border-collapse:collapse'><a href='$link' target='_blank'>Check our website</a></td></tr></tbody></table></td></tr></tbody></table></div></div></div><div class='yj6qo'></div></div>";



// $email1='contact@ddeveloperz.com';

// $headers = "From: contact@ddeveloperz.com\r\n";

// $headers .= "Reply-To: ". strip_tags($email1) . "\r\n";

// $headers .= "MIME-Version: 1.0\r\n";

// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



// mail($to, $subject,$usermsgtext, $headers);



//end mail to user


  } else {
        // Not a POST request, set a 403 (forbidden) response code.
               echo "There was a problem with your submission, please try again.";
    }



?>

