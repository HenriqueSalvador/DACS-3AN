<?php
    $id     = $_POST["txtId"];
    $nome   = $_POST["txtNome"];
    $icone  = $_POST["txtIcone"];
     include 'dbconnect.php';
     $insert = "insert into planetas(nome, icone) values(?, ?);";
     $stmt = mysqli_prepare($con, $insert);
     mysqli_stmt_bind_param($stmt, "ss", $nome, $icone);
     mysqli_stmt_execute($stmt);
     header('Location: '. 'index.php');
?>