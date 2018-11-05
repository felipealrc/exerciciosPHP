<?php

echo "Informado um número inicial,um número final e um numéro Y.<br/>
 Imprima apenas os números que são divisíveis pelo número Y no intervalo compreendido entre número inicial e número final.";
if(isset($_POST['n1']) && isset($_POST['n1'])){
    $sum = (int) $_POST['n1'] + $_POST['n1'];
    if($sum > 20)
        $sum+= 8;
    else
        $sum -= 5;
    
    echo "<pre>{$sum}</pre>";
}
?>

<form action="exercicio10.php" method="post">
    <input name='n1' type='number'/>
        <br/> + <br/>
    <input name='n2' type='number'/>
    <input type='submit'/>
</form>