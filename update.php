<?php
session_start();
include_once "conexao.php";

$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_SPECIAL_CHARS);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
$telefone_1 = filter_input(INPUT_POST, 'telefone_1', FILTER_SANITIZE_NUMBER_INT);
$telefone_2 = filter_input(INPUT_POST, 'telefone_2', FILTER_SANITIZE_NUMBER_INT);
$data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$data_batismo = filter_input(INPUT_POST, 'data_batismo', FILTER_SANITIZE_SPECIAL_CHARS);
$data_batismo_espirito = filter_input(INPUT_POST, 'data_batismo_espirito', FILTER_SANITIZE_SPECIAL_CHARS);
$religiao_anterior = filter_input(INPUT_POST, 'religiao_anterior', FILTER_SANITIZE_SPECIAL_CHARS);
$estado_civil = filter_input(INPUT_POST, 'estado_civil', FILTER_SANITIZE_SPECIAL_CHARS);
$escolaridade = filter_input(INPUT_POST, 'escolaridade', FILTER_SANITIZE_SPECIAL_CHARS);
$profissao = filter_input(INPUT_POST, 'profissao', FILTER_SANITIZE_SPECIAL_CHARS);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$nome_pastor = filter_input(INPUT_POST, 'nome_pastor', FILTER_SANITIZE_SPECIAL_CHARS);
$dizimista = filter_input(INPUT_POST, 'dizimista', FILTER_SANITIZE_SPECIAL_CHARS);
$cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_SPECIAL_CHARS);
$nome_pai = filter_input(INPUT_POST, 'nome_pai', FILTER_SANITIZE_SPECIAL_CHARS);
$nome_mae = filter_input(INPUT_POST, 'nome_mae', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);

$sql="update cliente set nome='$nome',endereco='$endereco',bairro='$bairro',uf='$uf',cep='$cep',telefone_1='$telefone_1',telefone_2='$telefone_2',data_nascimento='$data_nascimento',idade='$idade',email='$email',data_batismo='$data_batismo',data_batismo_espirito='$data_batismo_espirito',religiao_anterior='$religiao_anterior',cargo='$cargo',estado_civil='$estado_civil', escolaridade='$escolaridade',profissao='$profissao',rg='$rg',cpf='$cpf',email='$email',nome_pastor='$nome_pastor',dizimista='$dizimista',nome_pai='$nome_pai',nome_mae='$nome_mae',descricao='$descricao' where id='$id'";


$alterar = mysqli_query ($conexao,$sql);


mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'head.html'; ?>
</head>
<body>


<div class="alertaSucesso" >

  <div class="col-md-3">
    <div class="alert alert-success alert-dismissible">
        OK <?php echo $_SESSION['usuario'];?>  Novo Membro Alterado com Sucesso !

      </div>

      <small class="text-muted">Aguarde...</small>
      <!--header("refresh: 4;destino.php");-->
      <META HTTP-EQUIV="REFRESH" CONTENT="2;<?php header("refresh: 3;pesquisaMembro.php");  ?>


  </div>

</div>




</body>
</html>
