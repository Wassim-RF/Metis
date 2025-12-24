<?php
    require_once 'database/connection.php';
    use Database\DataBase;

    $db = new DataBase();
    $db->connect();