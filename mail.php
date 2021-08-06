<?php 
use Zend\Mail;

//Load composer's autoloader
//  require 'vendor/autoload.php';


// $mail = new Mail\Message();
// $mail->setBody('This is the text of the email.');
// $mail->setFrom('hello@ddeveloperz.com', "Sender's name");
// $mail->addTo('iambachiter@gmail.com', 'Name of recipient');
// $mail->setSubject('TestSubject');

// $transport = new Mail\Transport\Sendmail();

// $transport->send($mail);
// $headers = "From: hello@ddeveloperz.com\r\n";
// $headers .= "Reply-To: hello@ddeveloperz.com\r\n";
// $headers .= "Return-Path: hello@ddeveloperz.com\r\n";

  $headers = array(
         'From: Ddeveloperz <hello@ddeveloperz.com>',
         'MIME-version: 1.0',
         'Message-ID: <' . time() . '-Ddeveloperz>',
         'X-Mailer: PHP v' . phpversion(),
         'Content-Type: text/html; charset=iso-8859-1',
         'Content-Transfer-Encoding: 8bit',
        );
$email= mail('gurwindersingh25@gmail.com','testmail','hello there',implode(PHP_EOL, $headers));
if ($email == true  ) {
   echo "The email has been sent!";
   } else {
   echo "The email has failed!";
   }

     


