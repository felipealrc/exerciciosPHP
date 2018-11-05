<?php


echo "<br/>A partir do exemplo mostrado na aula, faça um programa que informe se a pessoa tem ou não maioridade jurídica.
     Utilizaremos como critério para dizer se ele tem ou não maioridade jurídica ser maior de 21 anos.";

     echo "<br/>";
     echo "<br/>";
     
if(isset($_POST['idade'])){
    
    $idade = $_POST['idade'];

        if($idade >=21){
            echo "Cadeia";
        }
        else{
            echo "Fundacao casa";  
        }    
}


?> 

<form method="post" action="exercicio05.php">
    idade:
    <input type="number" name="idade"></input>
    <input type="submit" />
</form>

