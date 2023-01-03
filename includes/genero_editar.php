<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'conexao.php';

$id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT * FROM generos WHERE cod_genero=$id";

$generos = $conexao->query($sql);
$genero = $generos->fetch();
if(!$genero){
    header('Location: index.php?page=genero_lista');
}

?>

<h1>Genero Editar</h1>

<form action="includes/genero_editarbd.php" method="post">
    <div class="mb-3">
        <label for="nome_genero" class="form-label">
            Nome do Genero:
        </label>
        <input class="form-control" type="text" name="nome_genero" value="<?=$genero['nome_genero']?>" id="nome_genero"  required>
        <input type="hidden" name="cod_genero" value="<?=$id?>">
    </div>
    <div class="mb-3">
        <input type="submit" value="Salvar">
    </div>
</form>