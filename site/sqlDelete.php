<?php
     header('Location: '. 'index.php');
     include 'dbconnect.php';
     $id     = $_GET["id"];
     $delete = "delete from planetas where codigo=?";
     $stmt = mysqli_prepare($con, $delete);
     mysqli_stmt_bind_param($stmt, "s", $id);
     mysqli_stmt_execute($stmt);

 
?>