<form action="exercicio25process.php" method="POST">
    <input type="text" name="nome" placeholder="Nome"/>
    <input type="text" name="sobrenome" placeholder="Sobrenome"/>
    <select name="turma">
        <option value="ADM">Administração - ADM</option>
        <option value="ADS">Análise de Sistemas - ADS</option>
        <option value="LOG">Logistica - LOG</option>
    </select>
    <select name="periodo">
        <option value="manha">Manhã</option>
        <option value="tarde">Tarde</option>
        <option value="noite">Noite</option>
    </select>
    <input type="submit"/>
</form>