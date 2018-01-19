<?php
require_once './action/actionCliente.php';
?>

<section class="container">
    <h3>Cadastro de Cliente</h3> 
    <p class="divider col m12 s12"></p>

    <form action="?cliente" method="post" enctype="multipart/form-data" onsubmit="" id='form'>

        <!-- Envio de acao pelo POST -->
        <?php
        if ($cliente->getIdCliente() != 0) {
            echo "<input type = 'hidden' name = 'action' value = 'alt'>";
        } else {
            echo "<input type = 'hidden' name = 'action' value = 'cad'>";
        }
        ?>

        <input type="hidden" name="id" value="<?php echo $cliente->getIdCliente(); ?>">


        <div class="form-group">
            <label for="Nome">Nome</label>
            <input type="text" name="nome" class="form-control" autofocus value="<?php echo $cliente->getNome(); ?>" aria-required="true" maxlength="100">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" value="<?php echo $cliente->getEmail(); ?>" aria-required="true" maxlength="100">
        </div>



        <div class="form-group ">
            <label for="numero">Numero</label>
            <input type="text" name="numero" class="form-control" value ="<?php echo $cliente->getNumero(); ?>" aria-required="true" maxlength="10">
        </div>

        <div class="form-group ">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" class="form-control" value="<?php echo $cliente->getComplemento(); ?>" aria-required="true" maxlength="50">
        </div>

        <div class="form-group ">
            <label for="cep">CEP</label>
            <input type="text" name="cep" class="form-control" id="cep" onchange="pesquisacep(this.value)" value="<?php echo $cliente->getEndereco()->getCep(); ?>" aria-required="true" maxlength="9">
        </div>

        <div class="form-group ">
            <label for="logadouro">Endereço</label>
            <input type="text" name="logradouro" class="form-control" id="rua" value="<?php echo $cliente->getEndereco()->getLogradouro(); ?>" aria-required="true" maxlength="150">
        </div>
        <div class="form-group ">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="form-control" id="bairro" value ="<?php echo $cliente->getEndereco()->getBairro(); ?>" aria-required="true" maxlength="50">
        </div>
        <div class="form-group ">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" class="form-control" id="cidade" value="<?php echo $cliente->getEndereco()->getCidade(); ?>" aria-required="true" maxlength="50">
        </div>
        <div class="form-group ">
            <label for="uf">UF</label>
            <input type="text" name="uf" class="form-control" id="uf" value="<?php echo $cliente->getEndereco()->getUf(); ?>" aria-required="true" maxlength="2">
        </div>

        <div class="form-group">
            <label for="pws1">Senha</label>
            <input type="password" name="pws1" class="form-control">
        </div>

        <div class="form-group">
            <label for="pws2">Confirme a senha</label>
            <input type="password" name="pws2" class="form-control">
        </div>


        <button class="btn" > Salvar </button> 
        <button type="reset" class="btn" onclick="window.location.replace('index.php')"> Cancelar </button> 

    </form>
    <script src="./view/js/ceps.js"></script>

</section>

