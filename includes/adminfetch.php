<?php

try {
    require_once "dbhInc.php";
    $query = "SELECT email, department FROM admins";
    $stmnt = $pdo->prepare($query);
    $stmnt->execute();
    $results = $stmnt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($results);

    die();
} catch (PDOException $e) {
    
    die("Error fetching data: " . $e->getMessage());
}