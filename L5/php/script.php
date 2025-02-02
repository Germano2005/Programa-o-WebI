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
<h1 class="alinhar">Informações dos carros</h1>
<?php
$matrizCarros = [$chassi1 = $_POST['chassi1'] => [$nomeFabric1 = $_POST['nome1'], $precoVenda1 = $_POST['preco1']],
                $chassi2 = $_POST['chassi2'] => [$nomeFabric2 = $_POST['nome2'], $precoVenda2 = $_POST['preco2']],
                $chassi3 = $_POST['chassi3'] => [$nomeFabric3 = $_POST['nome3'], $precoVenda3 = $_POST['preco3']],
                $chassi4 = $_POST['chassi4'] => [$nomeFabric4 = $_POST['nome4'], $precoVenda4 = $_POST['preco4']]];

foreach ($matrizCarros as $codigo => $vetorInterno){
    $vetorAux[$codigo] = $vetorInterno[1]; //vetor utilizar para capturar o nome do fabricante de da menor venda
}

$carroMaisBarato = $matrizCarros[array_search(min($vetorAux), $vetorAux)][0];

echo "<p class='alinhar mscript'>O Fabricante que teve a menor venda do veículo foi: <br> <span>$carroMaisBarato</span></p>";

echo"<hr>";

$precoMedio = array_sum($vetorAux) / 4;

echo "<p class='alinhar mscript'>O preço médio das vendas dos veículos foi: <br> <span>R$$precoMedio</span></p>";


?>
</body>
</html>

