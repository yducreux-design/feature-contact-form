<?php include("include_header.php") ?>
<?php
if (!$_SESSION["username"]) {
    $_SESSION['message'] = 'Vous n\'êtes pas connecté.';
        header('Location: form_login.php');}
if (isset( $_GET['contact_id'] ) && !empty( $_GET['contact_id'])) {
    $contact_id=strip_tags($_GET['contact_id']);
    require_once("db_connect.php");
$sql='SELECT * FROM `tbl_contact` WHERE `contact_id` = :contact_id';
$query = $dbh->prepare($sql);
$query->bindValue(':contact_id', $contact_id, PDO::PARAM_INT);
$query->execute();
$contact=$query->fetch();
//var_dump($contact);
//echo "<br>";

//echo $contact_id;
if (!$contact) {
    $_SESSION['message'] = 'This ID doesn\'t exist.';
    header('Location: view_contact.php'); 
}
}else {
    $_SESSION['message'] = 'URL is not valid...';
    header('Location: view_contact.php'); 
}

?>

<h1><?=$contact["contact_subject"] ?></h1>
<p>Auteur : <?=$contact["contact_username"] ?>, <a href="mailto:<?=$contact["contact_mail"] ?>"><?=$contact["contact_mail"] ?></a> </p>
<p>Message :  </p>
<p>  <?=$contact["contact_message"] ?> </p>

<a href="index.php"><button>Retour</button></a>




<?php include("include_footer.php") ?>