<?php
#arquivo incluides/filme_lista.php
?>
        <div class="m-auto w-25">
            <h1 class="text-center">Generos</h1>
        </div>
        <?php
            
            //faz a consulta
            $sql ="SELECT * FROM generos";
            $genero = $conexao->query($sql);

            //mostrar os resultados
            echo '<ul class="list-group w-50 m-auto">';
            foreach($genero as $g){
                echo '<li class="list-group-item">';
                echo $g['nome_genero'];
                echo '<a class="float-end p-2" href="includes/genero_apagar.php?id='.$g['cod_genero'].'">Apagar</a>';
                echo '<a class="float-end p-2" href="index.php?page=genero_editar&id='.$g['cod_genero'].'">Editar</a>';
                
                echo '</li>';
            }
            echo '</ul>';

        ?>