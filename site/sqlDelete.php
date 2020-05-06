<?php
     $id     = $_GET["id"];
  
     var_dump ($_GET["id"]);
     $con = mysqli_connect("localhost","bob","bob","univille");
     $delete = "delete from planetas where codigo=?";
     $stmt = mysqli_prepare($con, $delete);
     mysqli_stmt_bind_param($stmt, "s", $id);
     mysqli_stmt_execute($stmt);
     header('Location: '. 'index.php');
 
?>