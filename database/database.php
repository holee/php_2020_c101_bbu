<?php
try {
    $connection = new PDO("mysql:host=localhost;dbname=c101;port=3306;", "root", "");
} catch (PDOException $ex) {
    exit($ex->getMessage());
}