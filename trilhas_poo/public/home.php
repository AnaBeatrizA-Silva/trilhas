<?php
/** @var \App\Models\Livro[] $livros */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Biblioteca</h1>
    <a href="./views/cadastroLivro.php">Cadastrar Livro</a>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Disponibilidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($livros)): ?>
                <?php foreach ($livros as $livro): ?>
                    <tr>
                        <td>
                            <a href="index.php?rota=detalhes&id=<?= $livro->getId() ?>">
                                <?= htmlspecialchars($livro->getTitulo()) ?>
                            </a>
                        </td>
                        <td><?= htmlspecialchars($livro->getAutor()) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="3">Nenhum livro encontrado.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>