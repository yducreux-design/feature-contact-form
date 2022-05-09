<?php

    session_start();
   

    $username = strip_tags($_POST['data-username']);
    $mail = strip_tags($_POST['data-mail']);
    $subject = strip_tags($_POST['data-subject']);
    $message = "Message from: ".$username.": " .strip_tags($_POST['data-message']);

    $to      = 'acs.dijon.dwwm.js@gmail.com';
    $headers = 'From: '. $mail . "\r\n" .
    'Reply-To: ' . $mail . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
    echo $username;
    echo '<br>';
    echo $message;
    
     $_SESSION["message"] = "ça marche !";
     header("Location: index.php");

     // eof