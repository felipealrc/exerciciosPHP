<?php

echo "Crie uma programa em PHP que conte de 5.000 a 5.543<br/><br/><br/>";

for($i=5000;$i<= 5543;$i++){
    if($i%2){
        echo "{$i} - impar ";  
    }else{
        echo "{$i} - par ";  
    }
    echo "</br>";
}