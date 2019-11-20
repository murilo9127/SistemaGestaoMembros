<?php

include ('verifica_login.php');
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>



  <!------ verifica se o usuario esta logado se nao estive manda para pagina login.html     ----->



  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="cssLogin/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="cssLogin/login.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="cssLogin/bulma.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Boas Novas Sitema de Gerenciamento</title>
</head>

<body>


  <!------ BARRA DE NAVEGACAO TOPO     ----->

  <div class="black">
    <ul class="barraTopo">

        <img  class="icone" style="float:left" src="imagens/icon.jpeg"></img>

        <li style="float:right"><a class="active" <a href="logout.php">Sair</a>
          </li>
            </ul>
    </div>

    <div class="alertaBemVindo" >

      <div class="col-md-3">
        <div class="alert alert-success alert-dismissible">
            <small class="text-muted">Seja Bem Vindo <?php echo $_SESSION['usuario'];?> !</small>
          </div>




      </div>

    </div>



    <div class="teste">


      <div class="fundoPrincipal">
      </div>

      <div class="menuOpcao">
        <br>
          <br>

              <br><br><br><br>

                <br>



        <a href="relatorio_filtro.php" id="relatorio" alt="Relatorio"> <img  src="imagens/relatorio.jpeg" alt="Relatorio" class="opcao" </a>
        <a href="CadastroMembro.php">  <img  src="imagens/iconeCadastro.png"  class="opcao" </a>
        <a href="PesquisaMembro.php">  <img  src="imagens/iconePesquisa.png"  class="opcao" </a>

        </div>

    </div>


  </body>


  </html>
