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

    public function criar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $produto = new produto();
            $produtodao = new produtoDAO();
            $produto->setNome($_POST['nome']);
            $produtodao->salvar($produto);
            header('Location: index.php');
            exit();
        }
        require_once __DIR__ . '/../views/produtoForm.php';
    }

    public function excluir()
    {
        $produto = new produto();
        $produtodao = new produtoDAO();
        $produto->setId($_GET['id']);
        $produtodao->excluir($produto);
        header('Location: index.php');
        exit();
    }

    public function editar()
    {
        $produto = new produto();
        $produtodao = new produtoDAO();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $produto->setId($_POST['id']);
            $produto->setNome($_POST['nome']);
            $produtodao->atualizar($produto);
            header('Location: index.php');
            exit();
        } else {
            $produto = $produtodao->buscarPorId($_GET['id']);
            //comando de depuração
            //para ver o que tem dentro do $produto
            /*var_dump($produto);
            exit();*/
            $GLOBALS['produto'] = $produto;
            require_once __DIR__ . '/../views/produtoForm.php';
        }
    }
}