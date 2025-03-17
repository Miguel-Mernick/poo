<?php
    $aluno = [
        "nome" => "miguel",
        "idade" => 18,

        "estudar" => function() use (&$aluno){
            echo "{$aluno['nome']} está estudando e tem {$aluno['idade']} anos";
        }
    ];

    $aluno ['estudar']();
?>