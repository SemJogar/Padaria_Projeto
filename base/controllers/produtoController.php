<?php 
//Essa linha inclui a definição da classe Produto, que presumivelmente está localizada em models/produto.php.
require_once __DIR__ . '/../models/produto.php';
class ProdutoController {
    public function listar() {
        //simulando a obtenção desses dados de um banco de dados
        $produtos = [
            new Produto(1, "Camiseta", 49.90),
            new Produto(2, "Calça", 89.90),
            new Produto(3, "Botas", 56.60),
        ];
        /*
        Depois de preparar os dados, você carrega a view produtoView.php, que deverá usar a variável $produtos para exibir os dados.
        */
        require_once __DIR__ . '/../views/produtoView.php';
    }
}