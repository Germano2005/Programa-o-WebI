<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 3 da lista 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Sistema de vendas </h1>

<form action="script.php" method="post">
    <fieldset>
        <legend>Formulário</legend>

        <label>Insira o valor inicial da venda: </label>
        <input type="number" name="valor" step="0.01" autofocus>

        <label>Percentual de comissão da venda: </label>
        <input type="number" name="com" min="0" max="100" step="1">

        <div class="escolha">
            <label>Possui cartão de fidelidade? </label>
            <br>
            <input type="checkbox" name="cartao">
            <label class="arrumar">Sim</label>
        </div>

    </fieldset>
    <button type="submit" name="enviar-dados">Submeter os dados</button>
</form>

<?php

function calcularComissao($valorVenda, $comissao)
{
    return $valorVenda * ($comissao/100);
}

function descontoFidelidade($valorInicial)
{
    return $valorInicial * (5/100);
}

function calcularFinal($valorInicial, $valorFidelidade)
{
    return $valorInicial - $valorFidelidade;
}

function mostraDados($valorInicial, $comissao, $valorComissao, $valorFidelidade, $valorFinal)
{
    echo "<p class='centro'><span>DADOS DA VENDA</span></p> <hr>";
    echo "<p class='centro'>
Valor Inicial da venda: <span>R$$valorInicial</span> <br>
Percentual de comissão do vendador: <span>$comissao%</span> <br>
O valor da comissão do vendador: <span>R$$valorComissao</span> <br>
";
    if ($valorFidelidade != 0){
        echo "O valor do desconto dado ao cliente: <span>R$$valorFidelidade</span> <br>";
    }

    echo "O valor final da compra pago pelo cliente: <span>R$$valorFinal</span> <br></p>";

}


if (isset($_POST['enviar-dados'])){

    $valorInicial = $_POST['valor'];
    $comissao = $_POST['com'];

    $valorComissao = calcularComissao($valorInicial, $comissao);

    if (isset($_POST['cartao'])){
        $valorFidelidade =  descontoFidelidade($valorInicial);
    }
    else{
        $valorFidelidade = 0;
    }

   $valorFinal = calcularFinal($valorInicial, $valorFidelidade);

    mostraDados($valorInicial, $comissao, $valorComissao, $valorFidelidade, $valorFinal);

}

?>

</body>
</html>



