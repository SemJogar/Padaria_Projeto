<?php
require_once __DIR__ . '/controllers/produtoController.php';
$controller = new ProdutoController();
$controller->listar();