<?php
session_start();

include_once 'conexao.php';

  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  $_SESSION['id'] = $id;
  $querySelect = $conexao->query ("delete from cliente WHERE id = '$id' ");


  ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcn.com/bootstrap/3.3.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="cssLogin/login.css">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">



      <title></title>
    </head>
    <body >


    <div class="alertaSucesso" >
 
      <div class="col-md-3">
        <div class="alert alert-success alert-dismissible">
            Excuindo Cadastro !

          </div>

          <small class="text-muted">Aguarde...</small>
          <!--header("refresh: 4;destino.php");-->
          <META HTTP-EQUIV="REFRESH" CONTENT="3;<?php header("refresh: 3;PesquisaMembro.php");  ?>


      </div>

    </div>




    </body>
    </html>
