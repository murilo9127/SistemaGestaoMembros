<?php
include ('verifica_login.php');
 include_once 'head.html'
?>

<DOCTYPE!>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Boas Novas</title>


      <!-- Bootstrap CSS -->

  <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="styalesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>


    <body>

  <!------ BARRA DE NAVEGACAO TOPO     ----->



        <br>
        <br>
        <br>

<!---->

  <form class="" method="post" action="consultaMembro.php">
      <div class="input-group mb-3">
        <input type="search" name="usuarioDigitou" class="form-control" placeholder="Digite Nome" aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus>
          <div class="input-group-append">

          <button style="top:-35px; margin-left:100%;" class="btn btn-outline-secondary" type="submit">Buscar</button>

        </div>
      </div>
    </form>


<!------ INICIA TELA DE PESQUISA----->
<form class="containnerPesquisa1" method="post" action="processaPesquisa.php" >


  <div class="tabela_pesquisamembro">


  <div class = "contêiner tema-showcase" role = "main">
    <div class = "page-header">

    </div>
    <div class = "row">
      <div class = "col-md-12">
        <table class = "table">
          <thead>
            <tr>
              <th> ID </th>
              <th> Nome do Membro </th>
              <th> Opção </th>
            	<th></th>
      				<th></th>
              <th></th>

            </tr>
          </thead>
          <tbody>

            <tr>
              <td>-----------------------------------------------------</td>
              <td>-----------------------------------------------------</td>
              <td>
                <a alt='Daim Graffiti'  href="#" <span class='glyphicon glyphicon-pencil img_circle text-primary btn-icon' ></span></a>

                <a href="#"  <span class='glyphicon glyphicon-trash img_circle text-danger btn-icon'></span> </a>
              </td>


            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


  <!-- Trigger thae modal with a button -->




</div>

</form>


</body>
</html>
