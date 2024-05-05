<?php

if(isset($_POST)){
    $data = file_get_contents("php://input");
    $dataArray = json_decode($data, true); //if true given returns as array else as php object

    if (is_array($dataArray)) {
        if (isset($dataArray['title'])) {
          $title = $dataArray['title'];
        }
        if (isset($dataArray['module'])) {
          $module = $dataArray['module'];
        }
        if (isset($dataArray['details'])) {
          $details = $dataArray['details'];
        }
        $email = "joby@gmail.com";
     

  

  try {
    require_once "../../includes/dbhInc.php";

    $query = "INSERT INTO admins (title, module, details, admin_email) VALUES(:title, :module, :details, :email);";
    $stmnt = $pdo->prepare($query);

    $stmnt->bindParam(":title", $title);
    $stmnt->bindParam(":module", $module);
    $stmnt->bindParam(":details", $details);
    $stmnt->bindParam(":email", $email);


    $stmnt->execute();
    $pdo = null;
    $stmnt = null;
     
    header("Location: index.html");
    die();
    

} catch (PDOException $e) {
    die("Query failed".$e->getMessage());
}
    }

    else{
        header("Location: ../../index.html");
    }

} 
