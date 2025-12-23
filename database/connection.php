<?php
    try {
        $dsn = "mysql:host=127.0.0.1;dbname=metis;port=3306;charset=utf8";
        $pdo = new PDO($dsn, 'root', 1980);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }