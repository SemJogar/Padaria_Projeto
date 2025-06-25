<?php
    require_once __DIR__ . '/../util/conexao.php';
    require_once __DIR__ . '/../models/produto.php';
    class produtoDAO{
        /*o listar está com as () vazias,
        pois não necessita de parametro para funcionar*/
        public function listar()
        {
            $conn = conexao::getConexao();
            //no caso, produtos é a tabela
            //query() serve para executar ações direto no banco de dados
            $result = $conn->query("SELECT id, nome FROM produtos");
            //na linha abaixo, $produtos é uma array recém criada
            //feita para receber os valores do banco de dados;
            $produtos = [];
            while ($row = $result->fetch_assoc()){
                $produto = new produto();
                $produto->setId($row['id']);
                $produto->setNome($row['nome']);
                $produtos[] = $produto;
            }
            $conn->close();
            return $produtos;
        }
        
        public function salvar(produto $produto)
        {
            $conn = conexao::getConexao();
            $stmt = $conn->prepare("INSERT INTO produtos (nome) VALUES (?)");
            $stmt->bind_param("s", $produto->getNome());
            $stmt->execute();
            $stmt->close();
            $conn->close();
        }

        public function excluir(produto $produto)
        {
            $conn = conexao::getConexao();
            $stmt = $conn->prepare("DELETE FROM produtos WHERE id=?");
            $stmt->bind_param("i", $produto->getId());
            $stmt->execute();
            $stmt->close();
            $conn->close();
        }

        public function atualizar(produto $produto)
        {
            $conn = conexao::getConexao();
            $stmt = $conn->prepare("UPDATE produtos SET nome=? WHERE id=?");
            $stmt->bind_param("si", $produto->getNome(), $produto->getId());
            $stmt->execute();
            $stmt->close();
            $conn->close();
        }
        public function buscarPorId($id)
        {
            $conn = conexao::getConexao();
            $stmt = $conn->prepare("SELECT id, nome FROM produtos WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($row = $result->fetch_assoc()) {
                $produto = new produto();
                $produto->setId($row['id']);
                $produto->setNome($row['nome']);
            } else {
                $produto = null;
            }
            $stmt->close();
            $conn->close();
            return $produto;
        }
    }
