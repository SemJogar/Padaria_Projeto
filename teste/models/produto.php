<?php
class produto
{
    private $id;
    private $nome;

    //toda vez que você for usar a função 'produto'
    //você sempre tem que passar os dois parametros, exemplo:
    //produto("2", "teste")
    //logo estamos dizendo que ambos os parametros são vazios
    //para evitar erros quando user o produto();
    public function __construct($id = null, $nome = null) {
        $this->id = $id;
        $this->nome = $nome;
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
}