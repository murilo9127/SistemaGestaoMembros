<?php
	include("verifica_login.php");
	include_once("conexao.php");
	$html = '<table border=1';
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>Nome</th>';
	$html .= '<th>Dizimista</th>';
	$html .= '<th>Nome do Pastor</th>';
	$html .= '<th>E-mail</th>';
	$html .= '<th>Estado Civil</th>';
	$html .= '<th>Total de Registros</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';

	$result_transacoes = "SELECT * FROM cliente ORDER BY id ";
	$result = mysqli_query($conexao, $result_transacoes);
	while($row_transacoes = mysqli_fetch_assoc($result)){
		$html .= '<tr><td>'.$row_transacoes['nome'].'';

			$html .= '<td>'.$row_transacoes['dizimista'] . "";

				$html .= '<td>'.$row_transacoes['nome_pastor'] ."td";

					$html .= '<td>'.$row_transacoes['email'] . "";

					$html .= '<td>'.$row_transacoes['estado_civil'] .'<td>';

					$row=mysqli_num_rows($result);
				$html.='<span style="margin-left: 25px; background-color: green;" > . </span>'.$row ;

}

$row=mysqli_num_rows($result);
echo  $row;


	$html .= '</tbody>';
	$html .= '</table';


	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();

	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">  Relatório Todos os Membros</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_total_membro.pdf",
		array(
			"Attachment" => false //Para realizar o download automatico somente alterar para true
		)
	);
?>
