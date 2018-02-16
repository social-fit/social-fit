<?php
    /* Connect to a MySQL database using driver invocation */
    $dsn = 'mysql:dbname=social_fit;host=127.0.0.1';
    $user = 'root';
    $password = 'wally';

    try {
        $conn = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>