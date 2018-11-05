<?php

echo "Informado um número inicial,um número final e um numéro Y.<br/>
 Imprima apenas os números que são divisíveis pelo número Y no intervalo compreendido entre número inicial e número final.";
 $y = 137;
 $x = 9;
 $z = 13;

 echo "<br/> numeros que são divisiveis por {$z} de {$x} até {$y}<br/>";

for($i=$x;$i<= $y;$i++){
    if(!($i%$z)){
        echo "{$i} - divisivel <br/>";  
    }
}