<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
</head>

<body>
    <h1>Lista de Produtos</h1>
    <ul>
        <?php foreach ($produtos as $produto): ?>
            <li>
                <!--$produtos foi criado no produtoController e aramzena as informções dos produtos-->
                ID: <?= $produto->getId(); ?> - Descrição: <?= $produto->getDescricao(); ?>
                                - Preço: R$ <?= number_format($produto->getPreco(), 2, ',', '.'); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>