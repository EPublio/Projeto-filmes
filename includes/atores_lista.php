<?php
#arquivo incluides/filme_lista.php
?>
        <div class="m-auto w-25">
            <h1 class="text-center">Atores</h1>
        </div>
        <?php
            
            //faz a consulta
            $sql ="SELECT * FROM atores";
            $ator = $conexao->query($sql);

            //mostrar os resultados
            echo '<ul class="list-group w-50 m-auto">';
            foreach($ator as $g){
                echo '<li class="list-group-item">';
                echo '<a href="index.php?page=ver">';
                echo $g['cod_ator']. ' - '.$g['nome_ator'];
                echo '</a>';
                echo '</li>';
            }
            echo '</ul>';

        ?>