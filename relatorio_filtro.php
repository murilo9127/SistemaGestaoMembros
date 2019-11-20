

<html lang="en" dir="ltr">
<head>




  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Boas Novas</title>


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcn.com/bootstrap/3.3.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="cssLogin/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <!------ BARRA DE NAVEGACAO TOPO     ----->


  <div class="barraTopo">
    <ul class="barraTopo">
      <li><a href="inicio.php"  >Inicio</a></li>
      <li><a href="cadastroMembro.php">Cadastro</a></li>
      <li><a href="PesquisaMembro.php">Pesquisar</a></li>
      <li><a href="relatorio_filtro.php">Relatorio</a></li>
      <li style="float:right"><a class="active" href="logout.php">Sair</a>
      </li>
    </div>
    <br>
    <br>
    <br>
    <form class="" method="post" action="relatorio_total_membro.php">
      <div class="input-group mb-3">
        <div class="campos_filtro_relatorio">
            <button type="submit" class="btn btn-outline-secondary"name="button">Gerar Relatório Todos os Membros</button>
        </div>
    </form>



    <form class="" action="relatorio_obreiros.php" method="post">
      <div class="campos_filtro_relatorio">
        <button type="submit" class="btn btn-outline-secondary"name="button">Gerar Relatório só Obreiros</button>
      </div>
    </form>

    <form class="" action="relatorio_casados.php" method="post">
      <div class="campos_filtro_relatorio">
        <button type="submit" class="btn btn-outline-secondary"name="button">Gerar Relatório só Casados</button>
      </div>
    </form>

    <form class="" action="relatorio_dizimista.php" method="post">
      <div class="campos_filtro_relatorio">
        <button type="submit" class="btn btn-outline-secondary"name="button">Gerar Relatório só Dizimistas</button>
      </div>
    </form>



    </body>
    </html>
