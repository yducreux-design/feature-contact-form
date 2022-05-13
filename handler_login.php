<?php
session_start();
if (isset( $_POST['data-username'] ) && !empty( $_POST['data-username'])
&& isset( $_POST['data-password'] ) && !empty( $_POST['data-password'])) {

$username=strip_tags($_POST['data-username']);
$password=strip_tags($_POST['data-password']);

require_once("db_connect.php");
$sql='SELECT user_password FROM `tbl_users` WHERE `user_username`= :user_username;';
$query = $dbh->prepare($sql);
$query->bindValue(':user_username', $username, PDO::PARAM_STR);
$query->execute();
$hash=$query->fetch();
var_dump($hash);


if ( password_verify($password, $hash['user_password']) ) {
    $_SESSION['message'] = 'Vous êtes connecté.';
    header('Location: view_contact.php');   
}else {
    $_SESSION['message'] = 'Le mot de passe est invalide.';
    //header('Location: form_login.php');
}

    
}else {
    $_SESSION['message'] = 'Remplissez tous les champs.';
    header('Location: form_login.php'); 
        
}