<?php
session_start();
include_once 'head.html';
include_once 'conexao.php';

  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  $_SESSION['id'] = $id;
  $querySelect = $conexao->query ("select * from cliente WHERE id = '$id' ");

  while ($rows_membro = $querySelect->fetch_assoc()):
    // code...

    $nome = $rows_membro['nome'];
    $endereco = $rows_membro['endereco'];
    $bairro = $rows_membro['bairro'];
    $uf = $rows_membro['uf'];
    $cep = $rows_membro['cep'];
    $telefone_1 = $rows_membro['telefone_1'];
    $telefone_2 = $rows_membro['telefone_2'];
    $data_nascimento = $rows_membro['data_nascimento'];
    $idade = $rows_membro['idade'];
    $data_batismo = $rows_membro['data_batismo'];
    $data_batismo_espirito = $rows_membro['data_batismo_espirito'];
    $religiao_anterior = $rows_membro['religiao_anterior'];
    $estado_civil = $rows_membro['estado_civil'];
    $escolaridade = $rows_membro['escolaridade'];
    $profissao = $rows_membro['profissao'];
    $rg = $rows_membro['rg'];
    $cpf = $rows_membro['cpf'];
    $email = $rows_membro['email'];
    $nome_pastor = $rows_membro['nome_pastor'];
    $dizimista = $rows_membro['dizimista'];
    $cargo = $rows_membro['cargo'];
    $nome_pai = $rows_membro['nome_pai'];
    $nome_mae = $rows_membro['nome_mae'];
    $descricao = $rows_membro['descricao'];



endwhile;

 ?>
 <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 </head>

 <form class="frm" action="update.php" method="post" colgroup>
    <h1>Edição de Membro</h1>
   <br>
   <br><br><br>
   <div class="auto">

     <div class="text-center">
       <label style="margin-left:3px;" for="nome">Nome:</label><tr>
     <input   type="text" name="nome"  id="nome" value="<?php echo $nome; ?>"   placeholder="Nome Completo" size="80" required autofocus <a alt="nome"></a>




     <label style="margin-left;" for="cep ">Cep:</label>
     <input type="number" name="cep" id="cep" value="<?php echo $cep; ?>" placeholder="Cep" size="13" ><br>
</div>
<div class="text-center">


     <label for="endereco">Endereço:</label>
     <input type="text" name="endereco" id="endereco" value="<?php echo $endereco;?>"  placeholder="Endereço Rua, Qd , etc...." size="30" >

     <label style="margin-left:4px;" for="bairro">Bairro:</label>
     <input type="text" name="bairro" id="bairro" value="<?php echo $bairro; ?>" placeholder="Bairro" size="15" required >

     <label style="margin-left:4px;" for="UF">UF:</label>
     <input type="text" id="UF" name="uf" value="<?php echo $uf; ?>" placeholder="UF" size="2" maxlength="2">

     <label style="margin-left:4px;" for="telefone_1">Telefone:</label>
     <input type="number" name="telefone_1" id="telefone_1" value="<?php echo $telefone_1; ?>" placeholder="Telefone 1" size="12" >

     <label  for="telefone_2">Telefone 2:</label>
     <input type="number" name="telefone_2" id="telefone_2" value="<?php echo $telefone_2; ?>" placeholder="Telefone 2" size="12" ><br>


     <label  for="data_nascimento">Data de Nascimento:</label>
     <input type="text" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nascimento; ?>"   placeholder="Data de Nascimento" onfocus="(this.type='date')" onblur="(this.type='date')" id="data_nascimento"><?php date("dd/mm/yyyy"); ?></input>

     <label  for="Idade">Idade:</label>
     <input type="text" name="idade" id="idade" value="<?php echo $idade; ?> " maxlength="4" size="5" required placeholder="Idade">

     <label  for="data_batismo">Data de Batismo:</label>
     <input type="text" name="data_batismo" id="$data_batismo" value="<?php echo $data_batismo; ?>" placeholder="Data de Batismo" onfocus="(this.type='date')" onblur="(this.type='date')" id="data_batismo">

     <label  for="data_batismo_espirito">É Batizado com Espiirito ?:</label>
     <input type="text" name="data_batismo_espirito" id="data_batismo_espirito" value="<?php echo $data_batismo_espirito; ?>" placeholder="É Batizado(a) Pelo Espirito Santo"  id="data_batismo-espirito" maxlength="3" size="30">

     <label  for="religiao_anterior">Religião Anterior:</label>
     <input type="text"name="religiao_anterior" id="religiao_anterior" value="<?php echo $religiao_anterior; ?>" maxlength="10" size="15" required placeholder="Religião Anterior" >

     <label  for="estado_civil">Estado Civil:</label>
     <input type="text" id="estado_civil" name="estado_civil" value="<?php echo $estado_civil; ?>" placeholder="Estado Civil" size="10" required  >

     <label  for="escolaridade">Nível Acadêmico:</label>
     <input type="text" id="escolaridade" name="escolaridade" value="<?php echo $escolaridade; ?>" placeholder="Nivel de Escolaridade" size="19" required  >

     <label  for="profissao">Profissão:</label>
     <input type="text" id="profissao" name="profissao" value="<?php echo $profissao; ?>" placeholder="Profissão" size="15" required  >

     <label  for="rg">RG:</label>
     <input type="number" id="rg" name="rg" value="<?php echo $rg; ?>" placeholder="RG" size="10" required  >

     <label  for="cpf">CPF:</label>
     <input type="number" id="cpf" name="cpf" value="<?php echo $cpf; ?>" placeholder="Cpf" maxlength="11" size="1" required>

     <label  for="email">E-mail @:</label>
     <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="E-mail"  size="30" required>

     <label  for="nome_pastor">Nome Pastor:</label>
     <input type="text" id="nome_pastor" name="nome_pastor" value="<?php echo $nome_pastor; ?>" placeholder="Nome do Pastor" maxlength="50" size="50" required>

     <label  for="dizimista">Dizimista ?:</label>
     <input type="text" id="dizimista" name="dizimista" value="<?php echo $dizimista; ?>" placeholder="Dizimista" maxlength="3" size="18" required>

     <label  for="cargo">Cargo/Função:</label>
     <input type="text" id="cargo" name="cargo" value="<?php echo $cargo; ?>" placeholder="Cargo/Função" maxlength="15" size="18" required><br>

     <label  for="nome_pai">Nome do Pai:</label>
     <input type="text" id="nome_pai" name="nome_pai" value="<?php echo $nome_pai; ?>" placeholder="Nome da Pai" maxlength="50" size="50">

     <label  for="nome_mae">Nome da Mãe:</label>
     <input type="text" id="nome_mae" name="nome_mae" value="<?php echo $nome_mae; ?>" placeholder="Nome da Mãe" maxlength="50" size="50" required>

     <label  for="descricao">Observaçao:</label>
     <textarea class="inputArea" id="descricao" name="descricao" rows="8" cols="80" placeholder="Observaçao"><?php echo  $descricao; ?></textarea>
     </div>
     </form>
<br>
 <br>
 <br>
 <br>
 <div class="btnSalvar">

   <button type="button" name="" >Cancelar</button>
   <button type="text" name="submit" >Salvar Edição</button>
 </div>
