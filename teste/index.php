<?php
//mostra os erros que foram cometidos
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/controllers/produtoController.php';
$controller = new produtoController();
//$controller->listar();
$action = isset($_GET['action']) ? $_GET['action'] : 'listar';
    switch ($action) {
        case 'criar':
        $controller->criar();
        break;
        case 'excluir':
        $controller->excluir();
        break;
        case 'editar':
        $controller->editar();
        break;
        
        case 'listar':
        default:
        $controller->listar();
        break;
    }