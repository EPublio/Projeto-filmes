<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>filmes</title>
</head>
<body class="bg-dark text-light">
    <main>
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Site não-pirata</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=genero_lista">Generos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=atores_lista">Atores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=genero_cadastrar">Cadastrar Genero</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=ator_cadastrar">Cadastrar Ator</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=filme_cadastrar">Cadastrar Filme</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
    
      require_once 'includes/conexao.php';

      $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_SPECIAL_CHARS);


      //opção boa segura

      if(file_exists("includes/$page.php")){
        require "includes/$page.php";
      }
      else{
        require "includes/filme_lista.php";
      }
      
      //opção nao segura

      // switch($page){
      //   case "filmes_lista":
      //     require_once 'includes/filme_lista.php';
      //     break;
      //   case "ver":
      //     require_once 'includes/ver.php';
      //     break;
      //   default:
      //     require_once 'includes/filme_lista.php';
      // }
      
      ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
