<?php
$times = array('Palmeiras',
                'Internacional',
                'Flamengo',
                'São',
                'Grêmio',
                'Atlético',
                'Atlético',
                'Santos',
                'Cruzeiro',
                'Botafogo',
                'Fluminense',
                'Corinthians',
                'Bahia',
                'Vasco',
                'Ceará',
                'Sport',
                'Vitória',
                'América',
                'Chapecoense',
                'Paraná');
echo "<table>";
echo "<tr><th>Jogos Possiveis</th></tr>";
$size = count($times);
for ($i=0; $i < $size; $i++) { 
    for ($y=$i+1; $y < $size ; $y++) { 
        echo "<tr> <td>{$times[$i]} X {$times[$y]}</td> </tr>";
    }
}
echo "</table>";