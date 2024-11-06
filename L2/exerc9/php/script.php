<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc 9 PHP</title>
</head>
<body>
    <h1>Página de resolução do pagamento</h1>    

<?php
    $valorCompra = $_POST["valor-compra"];

    $desconto = 0;
    $acrescimo = 0;

    if(isset($_POST["forma-pagamento"])){
        $formaPagamento = $_POST["forma-pagamento"];
        if(isset($_POST["forma-pagamento"]) == "vista"){
            $desconto = $valorCompra * 5/100;
        }
        else{
            $acrescimo = $valorCompra * 2/100;
        }
    }
    else{
        die("<p> Você não informou a forma de pagamento (à vista ou a prazo");
    }

    $sorteio = "Não";

    if(isset($_POST["visa"])){
        $sorteio = "Sim";
    }

    $valorFinal = $valorCompra - $desconto + $acrescimo;
    $valorFinalFormat = number_format($valorFinal, 2, ",", ".");

    echo "<p> Valor final da compra: <span> R$ $valorFinalFormat </span> <br>";

    if($sorteio == 1){
        echo "Participação sorteio: sim";
    }
    else{
        echo "Participação sorteio: não";
    }



?>


</body>
</html>