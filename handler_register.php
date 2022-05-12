<?php session_start();

    if (isset( $_POST['data-username'] ) && !empty( $_POST['data-username'])
    && isset( $_POST['data-mail'] ) && !empty( $_POST['data-mail'])
    && isset( $_POST['data-password'] ) && !empty( $_POST['data-password'])
    && isset( $_POST['data-confirmation'] ) && !empty( $_POST['data-confirmation'])) 


    if ($_POST['data-password']==$_POST['data-confirmation']) {
            echo "ok";
        }else {
            echo "Password don't match";
        }
    


    
