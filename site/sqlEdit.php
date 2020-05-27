<?php
    $id     = $_GET["txtId"];
    $nome   = $_GET["txtNome"];
    $icone  = $_GET["txtIcone"];
    //include 'errorDisable.php';
    include 'dbconnect.php';
    $update = "update planetas set nome=?,icone=? where codigo=?";
    $stmt = mysqli_prepare($con, $update);
    mysqli_stmt_bind_param($stmt, "sss", $nome, $icone, $id);
    mysqli_stmt_execute($stmt);
    //header('Location: '. 'index.php');
    header("Location: index.php",  true,  301 );  exit;
?>