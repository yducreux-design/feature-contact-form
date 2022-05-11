<?php

include("db_env.php");
try {
    $dbh = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
    echo "ok";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}