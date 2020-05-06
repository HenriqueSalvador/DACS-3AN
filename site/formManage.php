<!DOCTYPE html>
<html lang="en">

<head>

  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Henrique's Planeteitor </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  
  <!-- Icone da ABA -->
  <link rel="icon" href="https://image.flaticon.com/icons/png/512/178/178547.png">

</head>

<body class="bg-secondary text-white" >

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><span class="badge badge-danger">🪐</span> Planeteitor  </a>
    </div>
  </nav>
  <!-- Cabeça -->

<?php
  $id=0;
  $nome="";
  $icone="";
  
  if(isset($_GET['id'])){
     $id = (int) $_GET["id"];
     $con = mysqli_connect("localhost","bob","bob","univille");
     $select = "select * from planetas where codigo=?";
      $stmt = mysqli_prepare($con, $select);
      mysqli_stmt_bind_param($stmt, "i", $id);
      $a = mysqli_stmt_execute($stmt);
      mysqli_stmt_bind_result($stmt, $result);
      $result = mysqli_stmt_get_result($stmt);
      $row = $result->fetch_assoc();
          $id = $row['codigo'];
          $nome = $row['nome'];
          $icone = $row['icone'];
  }
?>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    
    <header class="jumbotron my-4 shadow bg-dark text-white">
      <h1 class="display-8">Editar <span class="badge badge-light"><b><?=$nome?></b></span></h1>
      <p class="lead">Aparentemente alguém está incerto sobre as informações cadastradas, hein?</p>
      </br>
      <form method="GET" action="sqlEdit.php">
        <input type="hidden" name="txtId" value="<?=$id?>"/>
        <p>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nome</span>
            </div>
            <input type="text" class="form-control " aria-describedby="basic-addon1" id="nome" name="txtNome" value="<?=$nome?>">
          </div>
          
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="icone">Ícone  </label>
            </div>
          <input data-emojiable="true" type="text" class="form-control" aria-describedby="basic-addon1" id="icone" data-emojiable="true" name="txtIcone" value="<?=$icone?> ">
          </div>
          <small id="emailHelp" class="form-text text-muted">Pressione <b>Windows + Ç </b>para abrir o teclado de emoji.</small>
       </p>
       <br/>
       <br/>
      <input class="btn btn-primary btn-lg" type="submit" name="Enviar" value="Salvar"> </input>
      <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Excluir
      </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="sqlDelete.php?id=<?=$id?>">Sim</a>
      <a class="dropdown-item" href="#">Não</a>
        </div>
      </div>
    </div>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <br/>
    </form>
    </header>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Criado por Henrique Salvador,<b> Planeteitor 2020</b> </p>
    </div>
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <!-- ** Don't forget to Add jQuery here ** -->
  <script src="jquery/jquery.js"></script>
  <script src="lib/js/config.js"></script>
  <script src="lib/js/util.js"></script>
  <script src="lib/js/jquery.emojiarea.js"></script>
  <script src="lib/js/emoji-picker.js"></script>
</body>

</html>
