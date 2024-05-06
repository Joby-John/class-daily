<?php

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $department = $_POST["department"];

    try {
        require_once "dbhInc.php";
        header("Location: ../index.php");
    } catch (PDOException $e) {
        die("Query failed".$e->getMessage());
    }
    

}
else{
    header("Location: ../index.php");
}