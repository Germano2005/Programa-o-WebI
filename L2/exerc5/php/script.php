<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão da Moeda</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Conversão da moeda</h1>
    <?php
    define('TAXA', 5.75);
    $dollar = $_POST['dollar'];
    $real = TAXA * $dollar;

    $realformat = number_format($real, 2, ",", ".");
    $dollarformat = number_format($dollar, 2, ",", ".");

    echo "<p> A quantidade de dolar que foi depositado foi:<br> <span>$ $dollarformat </span> <br> A quantidade de reais que foram obitdos é de: <br> <span> R$ $realformat </span> <br> Valor da taxa de câmbio: <span>R$", TAXA, "</span></p>";





    ?>
</body>
</html>