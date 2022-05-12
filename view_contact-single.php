<?php

$contact_id=strip_tags($_GET['contact_id']);

require_once("db_connect.php");
    $sql='SELECT * FROM `tbl_contact` WHERE `contact_id`=:contact_id';
    $query = $dbh->prepare($sql);
    $query->bindValue(':contact_id', $contact_id, PDO::PARAM_INT);
    $query->execute();
$contact = $query -> fetch();

if (isset($_GET['contact_id'])&&!empty($_GET['contact_id'])) {
    
}else {
    echo "c'est non";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1><?=$contact["contact_subject"] ?></h1>
    <p>Auteur : <?=$contact["contact_username"] ?>, <a href="mailto:<?=$contact["contact_mail"] ?>"><?=$contact["contact_mail"] ?></a></p>
    <p>Message : </p>
    <p>  <?=$contact["contact_message"] ?> </p>
</body>
</html>