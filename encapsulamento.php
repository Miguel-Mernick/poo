<?php
    class Aluno{
        public $nome;
        public $idade;
        private $nota;  //atributo privado

        public function __construct($nome, $idade, $nota)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->nota = $nota;
        }

        public function verNota(){
            return $this->nota;
        }

        public function estudar (){
            echo "{$this->nome} esta estudando e tem {$this->idade} anos e tirou {$this->verNota()}. ";
        }

    }
    $miguel = new Aluno ("miguel", 18, 10);

    $miguel->estudar();

?>