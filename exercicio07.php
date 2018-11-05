<?php


echo "Vamos considerar hipoteticamente que exista uma tabela de imposto de renda conforme a seguir:</br>
</br></br>
    - Quem ganha até R$ 1.000 não paga nada de imposto !</br>
    - Quem ganha até R$ 1.500 paga 10% de imposto !</br>
    - Quem ganha até R$ 2.000 paga 15% de imposto !</br>
    - E quem ganha acima de R$ 2.000 paga 20% de imposto!</br>
    </br></br>
    Crie um programa que emita uma mensagem informando qual o percentual de imposto que o funcionário vai pagar. Algo semelhante a \"Uau! Você não vai pagar nada de imposto!\" ou \"Caramba! Você paga 20% de imposto!\"";

     echo "<br/>";
     echo "<br/>";
     
if(isset($_POST['salario'])):
    $imposto;
    $salario = $_POST['salario'];
    if($salario <= 1000):
        echo "Uau! Você não vai pagar nada de imposto!<br>";
    
    else:
        if($salario <= 1500):
            $imposto = 10;
        
        elseif($salario <= 2000):
            $imposto = 15;
        
        elseif($salario > 2000):
            $imposto = 20;
        endif;
        echo "Caramba! Você paga {$imposto}% de imposto!";
    endif;
endif;


?> 

<form method="post" action="exercicio06.php">
    Salario:
    <input type="number" name="salario"></input>
    <input type="submit" />
</form>

