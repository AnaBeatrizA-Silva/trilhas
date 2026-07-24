<?php
/** @var \App\Models\Livro $livro */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Livro: <?= htmlspecialchars($livro->getTitulo()) ?></title>
</head>
<body>
    <h1>Detalhes do Livro</h1>
    
    <div>
        <p><strong>Título:</strong> <?= htmlspecialchars($livro->getTitulo()) ?></p>
        <p><strong>Autor:</strong> <?= htmlspecialchars($livro->getAutor()) ?></p>
        <p><strong>Editora:</strong> <?= htmlspecialchars($livro->getEditora()) ?></p>
        <p><strong>ISBN:</strong> <?= htmlspecialchars($livro->getIsbn()) ?></p>
        <p><strong>Data de Lançamento:</strong> <?= $livro->getDtLancamento()->format('d/m/Y') ?></p>
        <p><strong>Classificação Indicativa:</strong> <?= htmlspecialchars($livro->getClassificaoIndicativa()) ?></p>
        <p><strong>Disponibilidade:</strong> <?= htmlspecialchars($livro->getDisponibilidade()->name) ?></p>
        <p><strong>Sinopse:</strong></p>
        <p><?= nl2br(htmlspecialchars($livro->getSinopse() ?? 'Nenhuma sinopse disponível.')) ?></p>
    </div>

    <hr>
    <a href="index.php?rota=listar">Voltar para a lista</a>
</body>
</html>