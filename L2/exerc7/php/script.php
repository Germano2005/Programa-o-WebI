<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página em PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Fundamentos do  PHP - listaL2 - exercício 7</h1>

<?php

    $valorCompra = $_POST["valor-compra"];
    //Fazendo o PHP receber o value do botão de radio selecionado, antes disso vamos testar se o botão de radio foi marcado
    $desconto = 0;
    if(isset($_POST["forma-pagamento"])){
        $formaPagamento = $_POST["forma-pagamento"];
        if($formaPagamento == "sim"){
            $desconto = $valorCompra * 5/100;
        }
    }
    else{
        exit("<p>Campo obrigatório</p>");
    }

    // vamos para os testes do segundo grupo de botões de radio
    $acrescimo = 0;
    if(isset($_POST["forma-entrega"])){
        $formaEntrega = $_POST["forma-entrega"];
        if($formaEntrega == "sim"){
            $acrescimo = $valorCompra * 2/100;
        }
    }
    else{
        exit("<p> Campo obrigatório</p>");
    }

    $valorFinalCompra = $valorCompra - $desconto + $acrescimo;
    $valorCompraForma = number_format($valorFinalCompra, 2, ",", ".");

    echo "<p> Caro usuário, de acordo com os dados fornecidos, o valor final da compra paga pelo cliente é de <span> R$$valorCompraForma </span> </p>";

?>
</body>
</html>