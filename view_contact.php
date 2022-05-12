<?php

require_once("db_connect.php");
    $sql='SELECT * FROM `tbl_contact` ';
    $query = $dbh->prepare($sql);
    $query->execute();
$contacts = $query -> fetchAll(PDO::FETCH_ASSOC);
//var_dump($contacts);
?>

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
    <h1>Administration des Contacts</h1>
    <?php foreach ($contacts as $contact) { ?>
<p><a href="view_contact-single.php?contact_id=<?= $contact['contact_id']?>"><?= $contact['contact_subject']?></a></p>
        <?php } ?>
</body>
</html>