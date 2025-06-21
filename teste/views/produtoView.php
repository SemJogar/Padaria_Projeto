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
                ID: <?= $produto->getId(); ?> - Descrição: <?= $produto->getNome(); ?>
                <a href="index.php?action=editar&id=<?php echo $produto->getId(); ?>"><button type="button">Editar</button></a>
                <a href="index.php?action=excluir&id=<?php echo $produto->getId(); ?>" onclick="return confirm('Tem certeza que deseja excluir este cliente?')"><button type="button">Excluir</button></a>
            </li>
        <?php endforeach; ?>
        <a href="index.php?action=criar"><button type="button">Adicionar Produtos</button></a>
    </ul>
</body>

</html>