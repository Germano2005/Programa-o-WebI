<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 2 da lista 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Sistema de conversão de temperaturas</h1>

<form action="script.php" method="post">
    <fieldset>
        <legend>Formulário</legend>

        <label>Insira o valor numérico da temperatura: </label>
        <input type="number" name="temp" step="0.1" autofocus>

        <div class="escolha">
            <label>Escolha a escala de conversão: </label>
            <br>
            <input type="radio" name="escala" value="celsius">
            <label class="arrumar">Celsius</label>
            <input type="radio" name="escala" value="fahrenheit">
            <label class="arrumar">Fahrenheit</label>
        </div>


    </fieldset>
    <button type="submit" name="enviar-dados">Submeter os dados</button>
</form>

<?php

function converteFahrenheit($temp){
    $converte = ($temp * (9/5)) + 32;

    echo "<p class='centro'>Dados da conversão termométrica: <br>
            Temperatura em celsius = <span>$temp ºC</span>
            Temperatura Convertida para Fahreinheit = <span>$converte ºF</span></p>";
}

function converteCelsius($temp)
{
    $converte = ($temp - 32) * (5/9);

    echo "<p class='centro'>Dados da conversão termométrica: <br>
            Temperatura em Fahreinheit = <span>$temp ºC</span>
            Temperatura Convertida para celsius = <span>$converte ºF</span></p>";

}


if (isset($_POST['enviar-dados'])){
    $temp = trim($_POST['temp']);

    $escala = $_POST['escala'];

    if ($escala == "celsius"){
        converteFahrenheit($temp);
    }
    else{
        converteCelsius($temp);
    }

}

?>

</body>
</html>



