<?php
        try {
           
            $cod = filter_input(INPUT_GET,'cod_filme', FILTER_SANITIZE_NUMBER_INT);
            
            $sql = "SELECT filmes.*, diretores.nome_diretor 
            FROM filmes,diretores 
            WHERE diretores.cod_diretor = filmes.cod_diretor 
            AND cod_filme=$cod";
            
            $filmes = $conexao->query($sql);

            $filme = $filmes->fetch();
           

            echo '<div class="m-auto w-25 text-center border text-light">';
            echo "<h1>".$filme['titulo']."</h1>";
            echo '<p>Titulo original: '.$filme['titulo_original'].'</p>';
            echo '<p>Lançamento: '.$filme['ano_lancamento'].'</p>';
            echo '<p>Duraçao: '.$filme['duracao'].' minutos</p>';
            echo '<p>Diretor:'.$filme['nome_diretor'].' </p>';
            echo '<p>Gênero: </p>';
            echo '<p><a href="index.php">voltar</a></p>';
            echo '</div>';



        } catch (\PDOExeptiom $e) {
            file_put_contents("log.txt", $e->getMassage(), FILE_APPEND | LOCK_EX );
            echo '<div class="alert alert-danger">Ops, Houve um ERRO no site!</div>';
        }
        ?>