<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc 10 PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1>Farmácia</h1>

<?php
    $valorCompra = $_POST["valor-compra"];

    if (!isset($_POST['faixa-etaria'])){
        die("<p> A faixa etária é informação vital e prescisa ser fornecida! </p>");
    }

    $valorCompraFormat = number_format($valorCompra, 2, ".", ",");

    echo "<p> Valor da compra: R$$valorCompraFormat </p>";

    $faixaEtaria = $_POST['faixa-etaria'];

    if ($faixaEtaria == "Menos de 55 anos"){
        $taxaDesconto = 0;
    }
    elseif ($faixaEtaria == "Entre 55 e 70  anos"){
        $taxaDesconto = 5;
        echo "<p> Valor do desconto: {$taxaDesconto}% </p>";
    }
    else{
        $taxaDesconto = 7;
        echo "<p> Valor do desconto: {$taxaDesconto}% </p>";
    }

    if (isset($_POST['pagamento-cartao'])){
        $taxaDesconto = $taxaDesconto + 5;
        echo "<p> Valor do desconto do cartão fidelidade: {$taxaDesconto}% </p>";
    }

    $valorDoDesconto = $valorCompra * $taxaDesconto/100;

    $valorTotal = $valorCompra - $valorDoDesconto;

    $valorTotalFormat = number_format($valorTotal, 2, ",", ".");

    if ($valorCompraFormat == $valorTotalFormat){
        echo "<p> Valor final da compra: R$$valorTotalFormat </p>";
    }

?>

</body>
</html>