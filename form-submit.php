<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest")
  {
$headers = 'From: '.$from_name.' <'.$from.'>' . "\r\n";

    $headers.= "MIME-version: 1.0\n";

    $headers.= "Content-type: text/html; charset= iso-8859-1\n";

    if(mail($to, $subject, $message, $headers)){

     return true;

     }


?>
