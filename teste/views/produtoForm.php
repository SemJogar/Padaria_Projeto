<?php
if (!isset($produto) && isset($GLOBALS['produto'])) {
    $produto = $GLOBALS['produto'];
}
?>
<!DOCTYPE html>
<html>
    <body>
        <h1>
            <?php echo $produto ? 'Editar Produtos' : 'Adicionar Produtos'; ?>
        </h1><br><br>
        <form action="index.php?action=<?= $produto ? 'editar' : 'criar'; ?>" method="post">
            <?php if ($produto): ?>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($produto->getId()); ?>">
            <?php endif; ?>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"
            value="<?php echo $produto ? htmlspecialchars($produto->getNome()) : ''; ?>" required>
            <button type="submit"><?php echo $produto ? 'Salvar' : 'Adicionar'; ?></button>
        </form>
    </body>
</html>