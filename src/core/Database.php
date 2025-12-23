<?php
    $db_host = '127.0.0.1';
    $db_name = 'metis';
    $db_user = 'root';
    $db_pass = 1980;
    $db_port = 3306;

    try {
        $dsn = "mysql:host=$db_host;dbname=$db_name;port=$db_port;charset=utf8";
        $pdo = new PDO($dsn, $db_user, $db_pass);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }