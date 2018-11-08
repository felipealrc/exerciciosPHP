<?php
for($i=1;$i<=10;$i++){
    echo '<table>';
    for($y=1;$y<=10;$y++){
        $aux = $y * $i;
        echo "<tr><td>{$i} x {$y} = {$aux}</td></tr>";
    }    
    echo '</table> </br>';
}