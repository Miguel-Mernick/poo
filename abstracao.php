<?php
    abstract class pessoa{
        public $nome;

        public function __construct($nome)
        {
            $this->nome=$nome;
        }
    }
    class aluno extends pessoa{
    }

    $miguel = new aluno ("miguel ");
    echo $miguel->nome . "é ele";
?>