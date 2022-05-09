<?php

    $username = $_POST['data-username'];
    $mail = $_POST['data-mail'];
    $subject = $_POST['data-subject'];
    $message = "Message from: ".$username.": " .$_POST['data-message'];

    $to      = 'farah.mebarki@gmail.com';
    $headers = 'From: '. $mail . "\r\n" .
    'Reply-To: ' . $mail . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);

     echo "ça marche !";



