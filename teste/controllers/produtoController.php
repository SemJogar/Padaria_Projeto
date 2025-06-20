<?php 
//Essa linha inclui a definição da classe Produto, que presumivelmente está localizada em models/produto.php.
require_once __DIR__ . '/../models/produto.php';
require_once __DIR__ . '/../dao/produtoDAO.php';

class produtoController {
    public function listar() {
        $dao = new produtoDAO();
        $produtos = $dao->listar();

        // Inclui a View e passa os produtos
        require_once __DIR__ . '/../views/produtoView.php';
    }
}