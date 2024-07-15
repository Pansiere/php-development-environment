<?php include 'includes/header.php'; ?>

<div class="content">
    <p>Este é o conteúdo principal da página.</p>
    <h2>Exportador do ScreenMatch</h2>

    <form action="includes/export/exporta-arquivo.php" method="post">
        <fieldset>
            <label for="nome">Nome:</label> <br>
            <input type="text" name="nome" id="nome" required>
        </fieldset>

        <fieldset>
            <label for="ano">Ano de lançamento:</label> <br>
            <input type="year" name="ano" id="ano" required>
        </fieldset>

        <fieldset>
            <label for="nome">Nota:</label> <br>
            <input type="number" name="nota" id="nota" required step="0.1">
        </fieldset>

        <fieldset>
            <label for="nome">Gênero:</label> <br>
            <select name="genero" id="genero">
                <option value="super-heroi">Super-herói</option>
                <option value="comedia">Comédia</option>
                <option value="acao">Ação</option>
            </select>
        </fieldset>

        <br>
        <input type="submit" value="Enviar">
    </form>
</div>

<?php include 'includes/footer.php'; ?>