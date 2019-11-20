<?php
	include_once("conexao.php");
	$result_cursos = "SELECT * FROM cursos";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Modal</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Listar Cursos</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Nome do Curso</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody>
							<?php while(($_SESSION'')){ ?>
								<tr>
									<td><?php echo $rows_cursos['id']; ?></td>
									<td><?php echo $rows_cursos['nome']; ?></td>
									<td>
										<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_cursos['id']; ?>">Visualizar</button>
										<button type="button" class="btn btn-xs btn-warning">Editar</button>
										<button type="button" class="btn btn-xs btn-danger">Apagar</button>
									</td>
								</tr>
								<!-- Inicio Modal -->
								<div class="modal fade" id="myModal<?php echo $rows_cursos['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows_cursos['nome']; ?></h4>
											</div>
											<div class="modal-body">
												<p><?php echo $rows_cursos['id']; ?></p>
												<p><?php echo $rows_cursos['nome']; ?></p>
												<p><?php echo $rows_cursos['detalhes']; ?></p>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->
							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
