<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "conexao.php";
$titulo_ori = filter_input(INPUT_POST,'titulo_original');
$titulo = filter_input(INPUT_POST,"titulo",FILTER_SANITIZE_SPECIAL_CHARS);
$duracao = filter_input(INPUT_POST,"duracao",FILTER_SANITIZE_NUMBER_INT);
$ano = filter_input(INPUT_POST,"ano_lancamento",FILTER_SANITIZE_SPECIAL_CHARS);
$diretor_cod = filter_input(INPUT_POST,"cod_diretor",FILTER_SANITIZE_NUMBER_INT);
$genero_cod = filter_input(INPUT_POST,"cod_genero",FILTER_SANITIZE_NUMBER_INT);


$sql = "INSERT INTO filmes(titulo_original,titulo,duracao,ano_lancamento,cod_diretor,cod_genero) 
VALUES ('$titulo_ori','$titulo',$duracao,'$ano',$diretor_cod,$genero_cod)";
echo $sql;
$conexao->query($sql);

header("Location: ../index.php?page=filme_lista");

