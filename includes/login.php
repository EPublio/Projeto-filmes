
<h1>Login</h1>
<?php
$erro = filter_input(INPUT_GET,'erro',FILTER_SANITIZE_NUMBER_INT);
$msg_erro = "";
switch($erro){
    case 1:
        $msg_erro = "Email nao encontrado";
        break;
    case 2:
        $msg_erro = "Senha incorreta";
        break;
}
if($msg_erro != ""){
    echo "<div class='alert alert-danger'>$msg_erro</div>";
}
?>
<form action="includes/logindb.php" method="post">
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input class="form-control" type="text" name="email" id="email" required>
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input class="form-control" type="password" name="senha" id="senha" required>
    </div>
    <div lass="mb-3">
        <input type="submit" value="entrar">
    </div>
    <div class="mb-3">
        <a href="index.php?page=usuario_cadastrar">Cadastrar</a>
    </div>
</form>
