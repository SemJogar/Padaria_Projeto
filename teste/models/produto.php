<?php
class Produto {
    private $id;
    private $nome;
    private $barcode;
    private $componentes;
    private $preco;
    private $custo;
    private $lucro;
    private $quantidade;
    private $estoqueminimo;
    private $validade;
    private $fornecedor;

    public function __construct( //Preenchendo com null
        $id = null, 
        $nome = null,
        $barcode = null,
        $componentes = null,
        $preco = null, 
        $custo = null, 
        $lucro = null,
        $quantidade = null, 
        $estoqueminimo = null, 
        $validade = null, 
        $fornecedor = null
    ) { //Atribuindo o this
        $this->id = $id;
        $this->nome = $nome;
        $this->barcode = $barcode;
        $this->componentes = $componentes;
        $this->preco = $preco;
        $this->custo = $custo;
        $this->lucro = $lucro;
        $this->quantidade = $quantidade;
        $this->estoqueminimo = $estoqueminimo;
        $this->validade = $validade;
        $this->fornecedor = $fornecedor;
    }

    // Getters e Setters
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }

    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }

    public function getBarcode() { return $this->barcode; }
    public function setBarcode($barcode) { $this->barcode = $barcode; }

    public function getComponentes() { return $this->componentes; }
    public function setComponentes($componentes) { $this->componentes = $componentes; }

    public function getPreco() { return $this->preco; }
    public function setPreco($preco) { $this->preco = $preco; }

    public function getCusto() { return $this->custo; }
    public function setCusto($custo) { $this->custo = $custo; }

    public function getLucro() { return $this->lucro; }
    public function setLucro($lucro) { $this->lucro = $lucro; }

    public function getQuantidade() { return $this->quantidade; }
    public function setQuantidade($quantidade) { $this->quantidade = $quantidade; }

    public function getEstoqueMinimo() { return $this->estoqueminimo; }
    public function setEstoqueMinimo($estoqueminimo) { $this->estoqueminimo = $estoqueminimo; }

    public function getValidade() { return $this->validade; }
    public function setValidade($validade) { $this->validade = $validade; }

    public function getFornecedor() { return $this->fornecedor; }
    public function setFornecedor($fornecedor) { $this->fornecedor = $fornecedor; }
}