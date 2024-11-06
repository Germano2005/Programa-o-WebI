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
        $desconto = $valorCompra * 5/100;
    }
    

    // vamos para os testes do segundo grupo de botões de radio
    $acrescimo = 0;
    if(isset($_POST["forma-entrega"])){
        $acrescimo = $valorCompra * 2/100;
    }
    

    $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

    $descontoFormata = number_format($desconto, 2, ",", ".");
    $valorCompraFormata = number_format($valorCompra, 2, ",", ".");
    $acrescimoFormata = number_format($acrescimo, 2, ",", ".");
    $valorFinalFormata = number_format($valorFinalCompra, 2, ",", ".");


    if($valorCompra == $valorFinalCompra){
        echo "<p> Valor da Compra: <span> R$ $valorCompraFormata</span> <br> </p>";
    }
    elseif($desconto == 0){
        echo "<p>  Valor da Compra: <span> R$ $valorCompraFormata</span> <br> Valor do acrescimo: <span> R$ $acrescimoFormata</span> <br>
          Valor final da compra: <span> R$ $valorFinalFormata</span> </p>";
    }
    elseif($acrescimo == 0){
        echo "<p>  Valor da Compra: <span> R$ $valorCompraFormata</span> <br> Valor do desconto: <span> R$ $descontoFormata</span> 
        <br>  Valor final da compra: <span> R$ $valorFinalFormata</span> <br>";
    }
    else{
        echo "<p>  Valor da Compra: <span> R$ $valorCompraFormata</span> <br> Valor do desconto: <span> R$ $descontoFormata</span> <br>  Valor do acréscimo: 
        <span> R$ $acrescimoFormata</span> <br> Valor final da compra: <span> R$ $valorFinalFormata</span> <br> </p";
    }
    


?>
</body>
</html>