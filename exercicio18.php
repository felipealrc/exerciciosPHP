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
asort($times);

echo "<table> 
        <tr><th> Ordem crescente</th></tr>";
foreach($times as $time){
    echo "<tr><td>{$time}</td></tr>";
}
echo "</table>";

arsort($times);

echo "<table> 
        <tr><th> Ordem decrescente</th></tr>";
foreach($times as $time){
    echo "<tr><td>{$time}</td></tr>";
}
echo "</table>";

shuffle($times);
echo "<table> 
        <tr><th> Ordem sortida</th></tr>";
foreach($times as $time){
    echo "<tr><td>{$time}</td></tr>";
}
echo "</table>";