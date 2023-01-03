<?php
#arquivo incluides/filme_lista.php
?>
        <div class="m-auto w-50 p-5">
            <h1 class="text-center">Filmes</h1>
            <form action="" method="get" class="d-flex justify-content-center">
                <input type="search" name="pesquisa" id="pesquisa" placeholder="titulo">
                <input type="submit" value="pesquisar">
            </form>
        </div>
        <?php

          
            
            //capturar o valor enviado pela pesquisa
            $p = filter_input(INPUT_GET, 'pesquisa', FILTER_SANITIZE_SPECIAL_CHARS);
            if($p){
                echo '<p class="text-center"> Pesquisado por '.$p.'... </p>';
            }

            //faz a consulta
            $sql ="SELECT * FROM filmes WHERE titulo LIKE '%$p%' ORDER BY titulo";
            $filme = $conexao->query($sql);

            //mostrar os resultados
            echo '<ul class="list-group w-50 m-auto">';
            foreach($filme as $f){
                echo '<li class="list-group-item">';
                echo '<a href="index.php?page=ver&cod_filme='.$f['cod_filme'].'">';
                echo $f['titulo']. ' - '.$f['ano_lancamento'];
                echo '</a>';
                echo '</li>';
            }
            echo '</ul>';

        ?>