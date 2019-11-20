<form class="formCadastro" action="update.php" method="post" colgroup>
   <h1>Edição de Membro</h1>
  <br>
  <br><br><br>
  <div class="auto">


    <label style="margin-left:3px;" for="nome">Nome:</label><tr>

    </tr>
    <input   type="text" name="nome"  id="nome" value="<?php echo $nome; ?>"   placeholder="Nome Completo" size="80" required autofocus <a alt="nome"></a>

    <label style="margin-left;" for="cep ">Cep:</label>
    <input type="number" name="cep" id="cep" value="<?php echo $cep; ?>" placeholder="Cep" size="13" ><br>

    <label for="endereco">Endereço:</label>
    <input type="text" name="endereco" id="endereco" value="<?php echo $endereco;?>"  placeholder="Endereço Rua, Qd , etc...." size="30" >

    <label style="margin-left:4px;" for="bairro">Bairro:</label>
    <input type="text" name="bairro" id="bairro" value="<?php echo $bairro; ?>" placeholder="Bairro" size="15" required >

    <label style="margin-left:4px;" for="UF">UF:</label>
    <input type="text" id="UF" name="uf" value="<?php echo $uf; ?>" placeholder="UF" size="2" maxlength="2">

    <label style="margin-left:4px;" for="telefone_1">Telefone:</label>
    <input type="number" name="telefone_1" id="telefone_1" value="<?php echo $telefone_1; ?>" placeholder="Telefone 1" size="12" >

    <label style="margin-left:4px;" for="telefone_2">Telefone 2:</label>
    <input type="number" name="telefone_2" id="telefone_2" value="<?php echo $telefone_2; ?>" placeholder="Telefone 2" size="12" ><br>

    <label style="margin-left:4px;" for="data_nascimento">Data de Nascimento:</label>
    <input type="text" name="data_nascimento" id="data" value="<?php echo $data_nascimento; ?>"   placeholder="Data de Nascimento" onfocus="(this.type='date')" onblur="(this.type='date')" id="data_nascimento"><?php date("dd/mm/yyyy"); ?></input>
    <input type="text" name="idade" value="<?php echo $idade; ?> " maxlength="4" size="5" required placeholder="Idade">
    <input type="text" name="data_batismo" value="<?php echo $data_batismo; ?>" placeholder="Data de Batismo" onfocus="(this.type='date')" onblur="(this.type='date')" id="data_batismo">
    <input type="text" name="data_batismo_espirito" value="<?php echo $data_batismo_espirito; ?>" placeholder="É Batizado(a) Pelo Espirito Santo"  id="data_batismo-espirito" maxlength="3" size="30">
    <input type="text"name="religiao_anterior" value="<?php echo $religiao_anterior; ?>" maxlength="10" size="15" required placeholder="Religião Anterior" >
    <input type="text" name="estado_civil" value="<?php echo $estado_civil; ?>" placeholder="Estado Civil" size="10" required  >
    <input type="text" name="escolaridade" value="<?php echo $escolaridade; ?>" placeholder="Nivel de Escolaridade" size="19" required  >
    <input type="text" name="profissao" value="<?php echo $profissao; ?>" placeholder="Profissão" size="15" required  >
    <input type="number" name="rg" value="<?php echo $rg; ?>" placeholder="RG" size="10" required  >
    <input type="number" name="cpf" value="<?php echo $cpf; ?>" placeholder="Cpf" maxlength="11" size="1" required>
    <input type="text" name="email" value="<?php echo $email; ?>" placeholder="E-mail"  size="30" required>
    <input type="text" name="nome_pastor" value="<?php echo $nome_pastor; ?>" placeholder="Nome do Pastor" maxlength="50" size="50" required>
    <input type="text" name="dizimista" value="<?php echo $dizimista; ?>" placeholder="Dizimista" maxlength="3" size="18" required>
    <input type="text" name="cargo" value="<?php echo $cargo; ?>" placeholder="Cargo/Função" maxlength="15" size="18" required>
    <input type="text" name="nome_pai" value="<?php echo $nome_pai; ?>" placeholder="Nome da Pai" maxlength="50" size="50">
    <input type="text" name="nome_mae" value="<?php echo $nome_mae; ?>" placeholder="Nome da Mãe" maxlength="50" size="50" required>
    <textarea class="inputArea" name="descricao" rows="8" cols="80" placeholder="Observaçao"><?php echo  $descricao; ?></textarea>
    </form>
