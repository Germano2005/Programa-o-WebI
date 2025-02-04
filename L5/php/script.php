<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dados processados</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1 class="alinhar">Relatório dos carros</h1>
<?php

// a) registre os dados destes quatro veículos em uma matriz. Use o número do chassi  como índice associativo
$matrizCarros = [$chassi1 = $_POST['chassi1'] => [$nomeFabric1 = $_POST['nome1'], $precoVenda1 = $_POST['preco1']],
                $chassi2 = $_POST['chassi2'] => [$nomeFabric2 = $_POST['nome2'], $precoVenda2 = $_POST['preco2']],
                $chassi3 = $_POST['chassi3'] => [$nomeFabric3 = $_POST['nome3'], $precoVenda3 = $_POST['preco3']],
                $chassi4 = $_POST['chassi4'] => [$nomeFabric4 = $_POST['nome4'], $precoVenda4 = $_POST['preco4']]];

//b) mostre o fabricante do carro mais barato
foreach ($matrizCarros as $codigo => $vetorInterno){
    $vetorAux[$codigo] = $vetorInterno[1]; //vetor utilizar para capturar o nome do fabricante de da menor venda
}

$carroMaisBarato = $matrizCarros[array_search(min($vetorAux), $vetorAux)][0]; //buasca na matriz qual é o fabricante


//c) Calcule e mostre o preço médio de venda dos carros cadastrados na matriz
$precoMedio = array_sum($vetorAux) / 4;




//d) Ordene os dados da matriz em função do preço de cada carro, em ordem decrescente
asort($vetorAux);

echo "<table class='mscript'>
        <caption>Tabela dos dados dos veículos</caption>
        <tr>
            <th>Chassi</th>
            <th>Nome do fabricante</th>
            <th>Preço da venda</th>
        </tr>
        ";

$aux = 0;
foreach ($vetorAux as $chassi => $precos){
    if ($aux == 0){
        echo"<tr>
            <td class='first'>$chassi</td>
            <td class='first'>{$matrizCarros[$chassi][0]}</td>
            <td class='first'>R$$precos</td>
         </tr>";
    }
    else{
        echo"<tr>
            <td>$chassi</td>
            <td>{$matrizCarros[$chassi][0]}</td>
            <td>R$$precos</td>
         </tr>";
    }
    $aux++;
}

echo "</table>";

echo"<hr>";

echo "<h2 class='alinhar'>Outros dados</h2>";

echo "<div class='mostradados'>
        <div class='dado1 dados'>
            <p class='alinhar mscript'>O Fabricante que teve a menor venda do veículo foi: <br> <span>$carroMaisBarato</span></p>
        </div>
        <div class='dado2 dados'>
            <p class='alinhar mscript'>O preço médio das vendas dos veículos foi: <br> <span>R$$precoMedio</span></p>
        </div>
      </div>";

echo "<button type='submit' onclick='window.history.back()'>Voltar para a home</button>";
?>
</body>
</html>

