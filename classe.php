<?php
class Aluno {
    public $nome;
    public $idade;


    public function __construct($nome, $idade, $nota)
    {
        $this->nome = $nome;
        $this->idade = $idade;

    }

    public function estudar (){
        echo "{$this->nome} esta estudando";
    }
}

// criando objeto

$miguel = new Aluno ("miguel",18, 100);
$ana = new Aluno ("ana", 19, 90);

$miguel->estudar(); 
?>