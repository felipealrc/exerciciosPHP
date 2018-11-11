<?php
$personalidades =  array('Maomé',
                'Isaac Newton',
                'Jesus de Nazaré',
                'Sidarta Gautama',
                'Confúcio',
                'Paulo de Tarso',
                'Cai Lun',
                'Johannes Gutenberg',
                'Cristovão Colombo',
                'Albert Einstein',
                'Louis Pasteur',
                'Galileu Galilei',
                'Aristóteles',
                'Euclides',
                'Moisés',
                'Charles Darwin',
                'Qin Shihuang',
                'Augusto',
                'Nicolau Copérnico',
                'Antoine Lavoisier');
asort($personalidades);

echo "<table> 
        <tr><th> Ordem crescente</th></tr>";
foreach($personalidades as $personalidade){
    echo "<tr><td>{$personalidade}</td></tr>";
}
echo "</table>";

arsort($personalidades);

echo "<table> 
        <tr><th> Ordem decrescente</th></tr>";
foreach($personalidades as $personalidade){
            echo "<tr><td>{$personalidade}</td></tr>";
    }
echo "</table>";

shuffle($personalidades);
echo "<table> 
        <tr><th> Ordem sortida</th></tr>";
foreach($personalidades as $personalidade){
            echo "<tr><td>{$personalidade}</td></tr>";
        }
echo "</table>";