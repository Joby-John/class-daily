<?php

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $department = $_POST["department"];

    try {
        require_once "dbhInc.php";

        $query = "DELETE FROM admins where email = :email;";
        $stmnt = $pdo->prepare($query);

        $stmnt->bindParam(":email", $email);
    

        $stmnt->execute();
        $pdo = null;
        $stmnt = null;
         
        header("Location: ../pages/signUp/signUp.php");
        die();
        

    } catch (PDOException $e) {
        die("Query failed".$e->getMessage());
    }
    

}
else{
    header("Location: ../index.html");
}