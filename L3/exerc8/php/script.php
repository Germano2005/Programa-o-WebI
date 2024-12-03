<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fundamentos da linguagem PHP </title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<h1> Fundamentos do PHP - listaL3 - exercício 8 - resposta do PHP </h1>
<p></p>
<?php
    $vetorPreco = ["Dipirona" => 10.00, "Paracetamol" => 15.12, "Rivotril" => 80.15];

    $valorTotalCompra = 0;

    if (isset($_POST["remedio"])){
        $vetorRemediosComprados = $_POST['remedio'];

        foreach ($vetorRemediosComprados as $remedio){
            $valorTotalCompra = $valorTotalCompra + $vetorPreco[$remedio];
        }

    }
    //testemos se o cliente tem 60 ano0s ou mais. Neste caso, ele tem direiro a 5% de desconto no valor da compra
    $desconto = 0;

    if (isset($_POST['faixa-etaria'])){
        $desconto = $valorTotalCompra * 5 /100;
    }
    //calculando o valor final da compra dos medicamentos
    $valorFinal = $valorTotalCompra - $desconto;
    $valorFinalFormatado = number_format($valorFinal, 2, ",", ".");

    echo "<p>De acordo com a compra efetuada, o cliente pagará o valor total de <span>R$$valorFinalFormatado</span></p>";



?>
</body>
</html>
