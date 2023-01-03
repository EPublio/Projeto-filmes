<h1>Cadastrar Filme</h1>

<form action="includes/filme_cadastrardb.php" method="post">
    <!-- titulo original -->
    <div class="mb-3">
        <label for="titulo_original" class="form-label">
            Título original:
        </label>
        <input class="form-control" type="text" name="titulo_original" id="titulo_original" required>
    </div>
    <!-- titulo -->
    <div class="mb-3">
        <label for="titulo" class="form-label">
            Título:
        </label>
        <input class="form-control" type="text" name="titulo" id="titulo" required>
    </div>
    <!-- duracao -->
    <div class="mb-3">
        <label for="duracao" class="form-label">
            Duração:
        </label>
        <input class="form-control" type="text" name="duracao" id="duracao" required>
    </div>
        <!-- ano_lancamento -->
    <div class="mb-3">
        <label for="ano_lancamento" class="form-label">
            Ano de lançamento:
        </label>
        <input class="form-control" type="text" name="ano_lancamento" id="ano_lancamento" required>
    </div>
    
    <!-- cod_genero  -->
    <div class="mb-3">
        <label for="cod_genero" class="form-label">
            Genero:
        </label>
        <select class="form-select" name="cod_genero" id="cod_genero">
            <?php
                $generos = $conexao->query('SELECT * FROM generos ORDER BY nome_genero');
                foreach($generos as $g){
                    echo '<option value="'.$g['cod_genero'].'">';
                    echo $g["nome_genero"];
                    echo "</option>";
                }
            ?>
        </select>
    </div>

    <!-- cod_diretor  -->
    <div class="mb-3">
        <label for="cod_diretor" class="form-label">
            Diretor:
        </label>
        <select class="form-select" name="cod_diretor" id="cod_diretor">
            <?php
                $diretores = $conexao->query('SELECT * FROM diretores ORDER BY nome_diretor');
                foreach($diretores as $d){
                    echo '<option value="'.$d['cod_diretor'].'">';
                    echo $d["nome_diretor"];
                    echo "</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <input type="submit" value="Salvar">
    </div>
</form>

<?php
