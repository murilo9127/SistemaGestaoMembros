<?php
	include_once 'conexao.php';


  $nome = $_POST['usuarioDigitou'];



	$result_membro = "SELECT * FROM cliente WHERE nome LIKE '%$nome%'   LIMIT 10 ";
	$resultado_membro = mysqli_query($conexao, $result_membro);


 

		 while($rows_membro =  mysqli_fetch_assoc($resultado_membro)):
				  $id = $rows_membro['id'];
				  $nomeMembro = $rows_membro['nome'];
				  $telefone_1 = $rows_membro['telefone_1'];
				  $cargo = $rows_membro['cargo'];


					echo "<tr>";
					echo "<td>$id</td> <td>$nomeMembro</td> <td>$telefone_1</td> <td>$cargo</td> <td> <a alt='Daim Graffiti' style=text-decoration:none; href='Visualizar.php?id=$id' <span class='glyphicon glyphicon-pencil img_circle text-primary btn-icon'></span></a></td>";
					echo "<td> <a href='#myModal.php?id=$id' data-toggle='modal' data-target='#myModal' <span class='glyphicon glyphicon-trash img_circle text-danger btn-icon'></span></a></td>";
 					echo "</tr>";
				endwhile;

				?>

				<html>

					<body>

						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Confirmação de Exclusão</h4>
									</div>

										<div class="modal-body">
										<p style="text-align:center;">Deseja Mesmo Excluir?</p>
										<div class="text-center">
										 <a class="btn btn-success" role="button"   <a href="excluir.php?id=<?php echo $id?>">SIM</a>
										<button type="button" class="btn btn-danger">NÃO</button>
											</div>
										</div>


									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
									</div>
								</div>

							</div>
						</div>
       		</body>
			</html>
