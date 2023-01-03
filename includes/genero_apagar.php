<?php

require_once 'conexao.php';

$cod = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM generos WHERE cod_genero=$cod";

$conexao->query($sql);

header('Location: ../index.php?page=genero_lista');





