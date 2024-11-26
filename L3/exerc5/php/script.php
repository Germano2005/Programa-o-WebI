<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fundamentos da linguagem PHP </title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<h1> Fundamentos do PHP - listaL3 - exercício 1 - resposta do PHP </h1>
<p></p>
<?php
// recebendo os dados do formulário e guardando em três variáveis simples
$idade1 = $_POST['nota1'];
$idade2 = $_POST['nota2'];
$idade3 = $_POST['nota3'];

$vetorIdades = [$idade1, $idade2, $idade3];

$media = array_sum($vetorIdades) / count($vetorIdades);

$mediaFormat = number_format($media, 2, ",", ".");
echo "<p> Média das idades das pessoas $mediaFormat </p>";

?>
</body>
</html>