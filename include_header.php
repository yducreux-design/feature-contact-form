<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page d'administration des messages récupérés via un formulaire de contact.">
    <title>Administration des Contacts</title>
</head>
<body>
<p style="color:green">
    <?php
    if ($_SESSION) {
        echo $_SESSION["message"];
        $_SESSION["message"] = "";
    }
    ?>
    </p>