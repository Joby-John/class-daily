<?php

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $department = $_POST["department"];

    try {
        require_once "dbhInc.php";

        $query = "INSERT INTO admins (email, pwd, department) VALUES(?, ?, ?);";
        $stmnt = $pdo->prepare($query);
        $stmnt->execute([$email, $pwd, $department]);
        $pdo = null;
        $stmnt = null;
         
        die();
        header("Location: ../pages/signUp/signUp.html");

    } catch (PDOException $e) {
        die("Query failed".$e->getMessage());
    }
    

}
else{
    header("Location: ../index.html");
}