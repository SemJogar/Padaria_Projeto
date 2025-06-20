<?php
    require_once __DIR__ . '/../util/conexao.php';
    require_once __DIR__ . '/../models/produto.php';
    class produtoDAO{
        //o listar está com as () vazias,
        //pois não necessita de parametro para funcionar
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
                $produto = new Produto();
                $produto->setId($row['id']);
                $produto->setNome($row['nome']);
                $produtos[] = $produto;
            }
            $conn->close();
            return $produtos;
        }
    }
