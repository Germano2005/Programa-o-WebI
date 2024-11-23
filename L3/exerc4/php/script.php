<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fundamentos da linguagem PHP </title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<h1> Fundamentos do PHP - listaL3 - exercício 4 - resposta do PHP </h1>
<p></p>
<?php

    $valoresProdutos = [20, 15, 5];
    $valorTot = 0;

    if (!(isset($_POST['roupa']) || isset($_POST['calca']) || isset($_POST['bone']))){
        die("Nenhum produto foi selecionado!");
    }
    if (isset($_POST['roupa'])) {
        $produto1 = "Roupa";
        $comprasProdutos[$produto1] = $valoresProdutos[0];
        $valorTot += $valoresProdutos[0];
    }
    if (isset($_POST['calca'])) {
        $produto2 = "Calça";
        $comprasProdutos[$produto2] = $valoresProdutos[1];
        $valorTot += $valoresProdutos[1];
    }
    if (isset($_POST['bone'])) {
        $produto3 = "Boné";
        $comprasProdutos[$produto3] = $valoresProdutos[2];
        $valorTot += $valoresProdutos[2];
    }

        echo "<table> 
    <caption> Relação de dados dos alunos do CDTS/PRW1</caption>
        <tr> 
            <th>Produtos</th>
            <th>Valores</th>
        
        </tr>";

        foreach ($comprasProdutos as $produtos =>   $valores) {
            echo " <tr>
            <td>$produtos</td>
            <td>$valores</td>
            </tr>";
        }
        echo "</table>";


        echo "<p>O valor total da compra foi: <span>R$$valorTot</span></p>";

?>
</body>
</html>
