<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "sharelea@sharelearningmedia.com";
    $to = "23.noop@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine <br>";
    $headers = "From:" . $from;
    $send = mail($to,$subject,$message, $headers);
    if (!$send) {
    	echo "Error.";
    }else{
    	echo "The email message was sent.";
    }
    
?>