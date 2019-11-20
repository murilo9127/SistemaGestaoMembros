<?php

include_once("conexao.php"); 
$nome   = $_POST['nome'];
$endereco   = $_POST['endereco'];
$bairro   = $_POST['bairro'];
$cidade  =$_POST['cidade'];
$uf   = $_POST['uf'];
$cep= $_POST['cep'];
$telefone_1= $_POST['telefone_1'];
$telefone_2= $_POST['telefone_2'];
$data_nascimento= $_POST['data_nascimento'];
$idade= $_POST['idade'];
$data_batismo= $_POST['data_batismo'];
$data_batismo_espirito= $_POST['data_batismo_espirito'];
$religiao_anterior= $_POST['religiao_anterior'];
$estado_civil= $_POST['estado_civil'];
$escolaridade= $_POST['escolaridade'];
$profissao= $_POST['profissao'];
$rg= $_POST['rg'];
$cpf= $_POST['cpf'];
$cargo= $_POST['cargo'];
$email= $_POST['email'];
$nome_pastor= $_POST['nome_pastor'];
$dizimista= $_POST['dizimista'];
$nome_pai= $_POST['nome_pai'];
$nome_mae= $_POST['nome_mae'];
$descricao= $_POST['descricao'];




/*  $data_nascimento = DateTime::createFromFormat('Y-m-d', $_POST['data_nascimento'])->format( 'd/m/Y');*/


$sql = "insert into  cliente (idade, nome, endereco, bairro, cidade, uf, cep, telefone_1, telefone_2, data_nascimento, data_batismo, data_batismo_espirito, religiao_anterior, estado_civil, escolaridade, profissao, rg, cpf, email, nome_pastor, dizimista,cargo, nome_pai, nome_mae, descricao)
values ('$idade', '$nome','$endereco','$bairro','$cidade', '$uf', '$cep', '$telefone_1','$telefone_2', '$data_nascimento','$data_batismo','$data_batismo_espirito' ,'$religiao_anterior','$estado_civil','$escolaridade','$profissao','$rg','$cpf','$email','$nome_pastor','$dizimista','$cargo',
'$nome_pai','$nome_mae', '$descricao')";

$salvar = mysqli_query ($conexao,$sql);


mysqli_close($conexao);




/*echo "  $dataNascimento";

echo "//";
echo "$dataNascimento";*/

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
<body>


<div class="alertaSucesso" >

  <div class="col-md-3">
    <div class="alert alert-success alert-dismissible">
        Novo Membro Adicionado com Sucesso !
      </div>

      <small class="text-muted">Aguarde...</small>
      <!--header("refresh: 4;destino.php");-->
      <META HTTP-EQUIV="REFRESH" CONTENT="3;<?php header("refresh: 2;cadastroMembro.php");  ?>


  </div>

</div>




</body>
</html>
