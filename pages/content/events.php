<?php

$title = $_POST['title'];
$module = $_POST['module'];
$details = $_POST['details'];
$email  = "joby@gmail.com";

  

  try {
    require_once "../../includes/dbhInc.php";

    $query = "INSERT INTO events (title, module, details, admin_email) VALUES(:title, :module, :details, :email);";
    $stmnt = $pdo->prepare($query);

    $stmnt->bindParam(":title", $title);
    $stmnt->bindParam(":module", $module);
    $stmnt->bindParam(":details", $details);
    $stmnt->bindParam(":email", $email);


    $stmnt->execute();
    $pdo = null;
    $stmnt = null;

    $data = array('status'=>true,
    'msg'=>'Event added succesfully');

    header("Location: index.html");
    die();
    

} catch (PDOException $e) {
    $data = array('status'=>true,
    'msg'=>'Event added succesfully');
    die("Query failed".$e->getMessage());
}
echo json_encode($data);

?>