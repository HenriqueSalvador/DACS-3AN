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

<body class="bg-secondary text-white">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><span class="badge badge-danger">🪐</span> Planeteitor  </a>
    </div>
  </nav>
  <!-- Cabeça -->

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    
    <header class="jumbotron my-4 shadow bg-dark text-white">
      
      <h1 class="display-8">Registre seu planeta</h1>
      <p class="lead">Complete este complexo formulário e veja a mágica acontecer.</p>
      <br/>
      <br/>
      
      <form method="POST" action="sqlInsert.php">
        <input type="hidden" name="txtId" value="0"/>
        <p>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nome</span>
            </div>
            <input type="text" class="form-control" placeholder="Planeteixom" aria-label="planeteixom" aria-describedby="basic-addon1" id="nome" name="txtNome">
          </div>
          
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="icone">Ícone  </label>
            </div>
            <select class="custom-select" id="icone" name="txtIcone">
                    <option> 🌌 </option>
                    <option> 🌍 </option>
                    <option> 📦 </option>
                    <option> 🥛 </option>
                    <option> 🎂 </option>
                    <option> 👌 </option>
                    <option> 🐉 </option>
                    <option> 👻 </option>
                    <option> 🚗 </option>
                    <option> 👽 </option>
                    <option> 🔥 </option>
                    <option> 🚀 </option>
                    <option> 😎 </option>
                    <option> 🎤 </option>
                    <option> 🌵 </option>
            </select>
          </div>
       </p>
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
      Ao editar você poderá escolher qualquer ícone do teclado de emoji.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
       <br/>
    <input class="btn btn-primary" type="submit" name="Enviar" value="Cadastrar planeta"> </input>
    <a class="btn btn-danger" href="index.php"> Voltar</a>
    </form>
    </header>

  </div>
  <!-- /.container -->
  
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
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
