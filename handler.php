<?php

    session_start();
    if (isset($_POST['data-username'])&&!empty($_POST['data-username'])) {
        
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

    require_once("db_connect.php");
    $sql='INSERT INTO `tbl_contact` (`contact_username`, `contact_mail`, `contact_subject`, `contact_message`) VALUES (:contact_username, :contact_mail, :contact_subject, :contact_message);';
    $query = $dbh->prepare($sql);
    $query->bindValue(':contact_username', $username, PDO::PARAM_STR);
    $query->bindValue(':contact_mail', $mail, PDO::PARAM_STR);
    $query->bindValue(':contact_subject', $subject, PDO::PARAM_STR);
    $query->bindValue(':contact_message', $message, PDO::PARAM_STR);
    $query->execute();
    
    $_SESSION["message"] = "ça marche !";
    header("Location: index.php");
    }
    else {
        $_SESSION["message"] = "ça marche pas";
        header("Location: index.php");
    }



     // eof