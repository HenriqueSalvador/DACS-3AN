<!DOCTYPE html>
<html lang="en">
  
  
  <!-- Cabeça --> 
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

<body class="bg-secondary text-white">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><span class="badge badge-danger">🪐</span> Planeteitor  </a>
    </div>
  </nav>
  <!-- Cabeça --> 
  
  
  
      <?php
        $con = mysqli_connect("localhost","bob","bob","univille");
        $sql = "select * from planetas";
        $result = mysqli_query($con,$sql);  
	    ?>




  <!-- Page Content -->
  <div class="container ">

    <header class=" jumbotron my-4 shadow bg-dark text-white">
    <div> 
    
    <h1>O que exatamente é isso? </h1>
    <p class="lead">Se trata de um dos maiores criadores de planeta de todo o planeta chamado de Planeteitor. Experimente criar seu próprio planeta. Será uma aventura incrível caso nenhum dump ou erro 404 apareça na sua tela.</p>
      <a href="formPlaneta.php" class="btn btn-success"> Cadastrar Planeta </a>
    </div> 
    </header>

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4 shadow-sm shadow bg-dark text-white">
    <h1>Lista de planetas</h1>
    <p class="lead">Aqui é listado tudo do seja lá o que tenha cadastrado.</p>
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
      Você pode <b>editar</b> as informações clicando no nome</b> do registro.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <br/>
    <table class="table table-borderless table-active">
      <thead class="thead-dark">
        <tr>
          <th> Nome </th>
          <th> Icone </th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($row = $result->fetch_row()){
        ?>
        <tr>
          <td> <a type="button" class="btn btn-dark" href="formManage.php?id=<?=$row[0]?>"> <?=$row[1]?></a> </td>
          <td> <?=$row[2]?> </td>
        </tr>
        
         <?php
            }
         ?>
      </tbody>
    </table>
    <hr class="my-4">
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

</body>

</html>
