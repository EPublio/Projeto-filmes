<h1>Cadastrar</h1>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$erro = filter_input(INPUT_GET,'erro',FILTER_SANITIZE_NUMBER_INT);
$msg_erro = "";
switch($erro){
    case 1:
        $msg_erro = "E-mail já cadastrado";
        break;
    case 2:
        $msg_erro = "Senhas não conferem";
        break;
}
if($msg_erro != ""){
    echo "<div class='alert alert-danger'>$msg_erro</div>";
}

?>
<form action="includes/usuario_cadastrardb.php" method="post">
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input class="form-control" type="text" name="email" id="email" required>
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input class="form-control" type="password" name="senha" id="senha" required>
    </div>
    <div class="mb-3">
        <label for="senha2">Confirmar Senha</label>
        <input class="form-control" type="password" name="senha2" id="senha2" required>
    </div>
    <div lass="mb-3">
        <input type="submit" value="salvar">
    </div>
    <div class="mb-3">
        <a href="index.php?page=login">Login</a>
    </div>
</form>



