<?php

require_once "conexao.php";

$nome = filter_input(INPUT_POST,"nome_genero",FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "INSERT INTO generos (nome_genero) VALUES ('$nome')";
$conexao->query($sql);

#redirect
header("Location: ../index.php?page=genero_lista");

