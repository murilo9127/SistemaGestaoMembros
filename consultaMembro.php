
  <?php include_once 'head.html' ?>
<div class="container theme-showcase" role="main">
    <div class="page-header">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <title>Boas Novas</title>
          <link href="css/style.css" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="css/style.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>

    </div>
    <div class="inputPesquisa">
      <form class="" method="post" action="consultaMembro.php">
          <div class="input-group mb-3">
            <input type="search" style="margin-left:-24%; top:-22px;" name="usuarioDigitou" class="form-control" placeholder="Digite Nome" aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus>
            <button style="top:-23px; margin-left:2px;" class="btn btn-outline-secondary" type="submit">Buscar</button>

 
          </div>
        </form>
        <div class="container">

    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome do Membro</th>
              <th>Telefone</th>
              <th>Cargo</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
              <?php include_once 'processaPesquisa.php'?>
          </tbody>
         </table>
         </form>
      </div>
    </div>
  </div>

  </div>
</div>

</div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
