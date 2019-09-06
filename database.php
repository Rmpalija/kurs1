<?php

try {
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '12345678';
    $dbname = 'articles';
    $dbh = new PDO('mysql:host='.$dbhost.';dbname=kurs', $dbuser, $dbpass);
}catch (PDOException $e){
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}

