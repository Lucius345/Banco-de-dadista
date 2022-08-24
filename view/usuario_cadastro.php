<?php
 if(isset($_POST['txtCadastrar'])){
     var_dump($_POST);
 }
?>

<fieldset>
    <legend>Cadastro do Usuário</legend>
    <form method="POST">
        <div class="form-group">
            <label>Endereço de email</label>
            <input type="email" name="txtEmail" class="form-control" aria-describedby="emailHelp" placeholder="Seu email">
            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="txtSenha" class="form-control" placeholder="Senha">
        </div>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="txtNome" class="form-control" placeholder="Seu Nome">
        </div>
        <button type="submit" name="txtCadastrar" class="btn btn-primary">Enviar</button>
    </form>
</fieldset>