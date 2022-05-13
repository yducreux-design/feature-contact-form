<?php session_start();

    if (isset( $_POST['data-username'] ) && !empty( $_POST['data-username'])
    && isset( $_POST['data-mail'] ) && !empty( $_POST['data-mail'])
    && isset( $_POST['data-password'] ) && !empty( $_POST['data-password'])
    && isset( $_POST['data-confirmation'] ) && !empty( $_POST['data-confirmation'])) 


    if ($_POST['data-password']==$_POST['data-confirmation']) {
        $username = strip_tags($_POST['data-username']);
        $mail = strip_tags($_POST['data-mail']);
        $unencrypted_password = strip_tags($_POST['data-password']);
        $encrypted_password = password_hash($unencrypted_password, PASSWORD_DEFAULT);
        //   echo $unencrypted_password;
        //   echo "<br>";
        //   echo  $encrypted_password;
        require_once("db_connect.php");
    $sql='INSERT INTO `tbl_users` (`user_username`, `user_mail`, `user_password`) VALUES (:user_username, :user_mail, :user_password);';
    $query = $dbh->prepare($sql);
    $query->bindValue(':user_username', $username, PDO::PARAM_STR);
    $query->bindValue(':user_mail', $mail, PDO::PARAM_STR);
    $query->bindValue(':user_password', $encrypted_password, PDO::PARAM_STR);
    $query->execute();
    
    $_SESSION["message"] = "You are registered";
    header("Location: index.php");
        
 
        }else {
            echo "Password don't match";
        }
    


    
