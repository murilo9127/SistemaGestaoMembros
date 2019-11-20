<?php
	include("verifica_login.php");
	include_once("conexao.php");
	$html = '<table border=1';
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>Nome</th>';
	$html .= '<th>Cargo</th>';
	$html .= '<th>Total de Registros</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';


	$result_transacoes = "SELECT * FROM cliente WHERE  cargo ='obreiro musico' OR cargo ='musico' OR cargo ='obreiro'
	OR cargo ='DIACONO'OR cargo ='diácono' OR cargo ='presbítero' OR cargo ='presbitero' OR cargo ='pastor'
	OR cargo ='porteiro' OR cargo ='diáconisa'  OR cargo ='evangelista'  ORDER BY id ";
	$result = mysqli_query($conexao, $result_transacoes);
	while($row_transacoes = mysqli_fetch_assoc($result)){
		$html .= '<tr><td>'.$row_transacoes['nome'].'';

			$html .= '<td>'.$row_transacoes['cargo'] . '<td>';
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
			<h1 style="text-align: center;">  Relatório Todos os Obreiros</h1>
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
