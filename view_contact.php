<?php

require_once("db_connect.php");
    $sql='SELECT * FROM `tbl_contact` ';
    $query = $dbh->prepare($sql);
    $query->execute();
$contacts = $query -> fetchAll(PDO::FETCH_ASSOC);
//var_dump($contacts);
?>

<?php include("include_header.php") ?>
    <h1>Administration des Contacts</h1>
    <?php foreach ($contacts as $contact) { ?>
<p><a href="view_contact-single.php?contact_id=<?= $contact['contact_id']?>"><?= $contact['contact_subject']?></a></p>
        <?php } ?>
        <a href="index.php"><button>Back</button></a>
<?php include("include_footer.php") ?>