<?php

require_once "./../database.php";

function getAllArticles () {
    global $dbh;
    $statment = $dbh->prepare('SELECT * FROM articles');
    $rows = $dbh->query($statment->queryString);
    $result = [];

    foreach ($rows as $row ) {
        $result[] = $row;
    }

    return $result;
}
