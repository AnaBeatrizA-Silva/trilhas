<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Livro</title>
</head>
<body>
    <form action="/salvar-livro" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo">
        <br>

        <label for="autor">Autor</label>
        <input type="text" name="autor" id="autor">
        <br>

        <label for="dt-lancamento">Data de Lançamento</label>
        <input type="date" name="dt-lancamento" id="dt-lancamento">
        <br>

        <label for="editora">Editora</label>
        <input type="text" name="editora" id="editora">
        <br>

        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" id="isbn">
        <br>

        <label for="sinopse">Sinopse</label>
        <textarea name="sinopse" id="sinopse"></textarea>
        <br>

        <label for="classificacao-indicativa">Classificacao Indicativa</label>
        <input type="text" name="classificao-indicativa" id="classificao-indicativa">
        <br>

        <button type="submit">Cadastrar Livro</button>
    </form>
</body>
</html>