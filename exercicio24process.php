<?php  
    if(isset($_POST['nome']) && isset($_POST['turma'])){
        echo "o aluno {$_POST['nome']}  esta matriculado em {$_POST['turma']}";
    }
    