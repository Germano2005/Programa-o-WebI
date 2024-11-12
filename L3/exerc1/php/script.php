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
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    //guardando as notas em um vetor de ìndice numérico - primeira forma
    $vetorNotas[0] = $nota1;
    $vetorNotas[1] = $nota2;
    $vetorNotas[2] = $nota3;

    // guardando as notas em um vetor de [] - segunda forma
    $vetorNotas = [$nota1, $nota2, $nota3];

    // guardamdo vetores em um array - terceira forma
    $vetorNotas = array($nota1, $nota2, $nota3);

    // exibindo os dados do vetor na página web
    echo "<pre>";
    print_r($vetorNotas); // mostra o conteúdo do vetor juntamente com com seu pontador de ìndice
    //var_dump($vetorNotas); mostra tudo a respeito de um vetor
    echo "</pre>";

    //Calcular a média de notas dos 3 alunos, usando prontos do PHP para manipulação de vetores

    $media = array_sum($vetorNotas) / count($vetorNotas);
    echo "<p> Média das notas dos alunos: $media </p>";

?>
</body>
</html>