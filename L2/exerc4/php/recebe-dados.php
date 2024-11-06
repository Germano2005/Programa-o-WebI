<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura convertida</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Fundamentos do PHP </h1>
<?php

    $temperatura = $_POST["tem-f"];
    $convertor = ($temperatura - 32) * (5/9);

    // formatação de valores numéricos
    $tempformat = number_format($temperatura, 1, ",", ".");
    $tempformat2 = number_format($convertor, 1, ",", ".");

    echo "<p> Resultado do conversor termométrico: <br> s
                Temperatura fornecida, em ºF: <span> $tempformat </span>
                <br>
                Temperatura convertida para ºC: <span> $tempformat2 </span> </p>"

 ?>

</body>
</html>