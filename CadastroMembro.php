<?php

include("verifica_login.php");
?>
<! DOCTYPE html>


<html >
<head>



  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="cssLogin/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="cssLogin/login.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">



</head>
<body>
  <title>Boas Novas </title>


  <!------ BARRA DE NAVEGACAO TOPO     ----->


  <div class="barraTopo">
    <ul class="barraTopo">
      <li><a href="inicio.php" >Inicio</a></li>
      <li><a href="cadastroMembro.php">Cadastro</a></li>
      <li><a href="PesquisaMembro.php">Pesquisar</a></li>
      <li><a href="relatorio_filtro.php">Relatorio</a></li>
      <li style="float:right"><a class="active" href="logout.php">Sair</a>
      </li>
    </div>


    <!------  <button href="cadastroLogin.php" type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar Novo Usuario</button>
    BOTAO ESTILIZADO COM BULMA.IO   ----->


    <br>
    <br>
    <br>


    <!------ FORMULARIO CADASTRO DE MEMBRO----->

    <form class="formCadastro" action="processa.php" method="post" colgroup>

      <!------ TITULO DO FORMULARIO----->

      <h1>Dados do Membro</h1>
      <br>
      <br><br><br>

      <!------
      <input type="text" name="nome" maxlength="45" size="50"placeholder="Nome do Aluno"  required autofocus>
      <input class="idade" type="text" name="idade" maxlength="2" size="2" placeholder="Idade"> <br> <br>
      <input type="text"  name="nome_pai" maxlength="45"  size="52" placeholder="Nome do Pai"> <br><br>

      <input type="submit" name="btnSalvar"  ></input>

      ----->


    </script>
    <input type="text" name="nome" value="" placeholder="Nome Completo" size="80" required autofocus >
    <input type="number" name="cep" value="" placeholder="Cep" size="35" >
    <input type="text" name="endereco" value="" placeholder="Endereço Rua, Qd , etc...." size="30" >
    <input type="text" name="cidade" value="" placeholder="Cidade" size="13">
    <input type="text" name="bairro" value="" placeholder="Bairro" size="15" required >
    <input type="text" name="uf" value="" placeholder="UF" size="2" maxlength="2">

    <input type="number" name="telefone_1" value="" placeholder="Telefone 1" size="12" >
    <input type="number" name="telefone_2" value="" placeholder="Telefone 2" size="12" >

    <input type="text" name="data_nascimento"   placeholder="Data de Nascimento" data-mask="00/00/0000" onfocus="(this.type='date')" onblur="(this.type='date')" id="data_nascimento"><?php date("dd/mm/yyyy"); ?></input>


    <input type="number" name="idade" value="" maxlength="2" size="1" required placeholder="Idade">

    <input type="text" name="data_batismo" placeholder="Data de Batismo" onfocus="(this.type='date')" onblur="(this.type='date')" id="data_batismo">

    <input type="text" name="data_batismo_espirito" placeholder="É Batizado(a) Pelo Espirito Santo"  id="data_batismo-espirito" maxlength="3" size="30">


    <input type="text"name="religiao_anterior" value="" maxlength="10" size="15" required placeholder="Religião Anterior" >
    <input type="text" name="estado_civil" value="" placeholder="Estado Civil" size="10" required  >
    <input type="text" name="escolaridade" value="" placeholder="Nivel de Escolaridade" size="45" required  >
    <input type="text" name="profissao" value="" placeholder="Profissão" size="15" required  >
    <input type="number" name="rg" value="" placeholder="RG" size="10" required  >
    <input type="number" name="cpf" value="" placeholder="Cpf" maxlength="11" size="11" required>
    <input type="text" name="email" value="" placeholder="E-mail"  size="30" required>
    <input type="text" name="nome_pastor" value="" placeholder="Nome do Pastor" maxlength="50" size="50" required>
    <input type="text" name="dizimista" value="" placeholder="Dizimista" maxlength="3" size="18" required>
    <input type="text" name="cargo" value="" placeholder="Cargo/Função" maxlength="15" size="45" required>
    <input type="text" name="nome_pai" value="" placeholder="Nome da Pai" maxlength="50" size="50">
    <input type="text" name="nome_mae" value="" placeholder="Nome da Mãe" maxlength="50" size="50" required>
    <!--<input type="text"  class="inputArea"name="descricao" value=""  maxlength="80" size="50" required>-->
    <textarea class="inputArea" name="descricao" rows="8" cols="80" placeholder="Observação"></textarea>

    <br>
    <br>
    <br>
    <br>
    <div class="btnSalvar">

      <button type="reset" name="" >Limpar</button>
      <button type="text" name="submit" >Salvar Mebro</button>
    </div>

  </form>

</body>
</html>
