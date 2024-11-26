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
    $vetorDados = [$nome1 = $_POST['nome1'] => $idade1 = $_POST['idade1'], $nome2 = $_POST['nome2'] => $idade2 = $_POST['idade2'], $nome3 = $_POST['nome3'] => $idade3 = $_POST['idade3']];


    if (!(isset( $_POST['nome1']) || isset( $_POST['nome2']) || isset( $_POST['nome3']))){
        die("Os nomes não foram selecionados");
    }

    if (!(isset( $_POST['idade1']) || isset( $_POST['idade2']) || isset( $_POST['idade3']))){
        die("As idade não foram selecionados");
    }

echo "<table> 
<caption> Tabela de pessoa e sua idade</caption>
    <tr> 
        <th>Nome</th>
        <th>Idade</th>
        
    </tr>";


//para compormos o corpo da tabela, necessitamos navegar por todos o vetor e extrair seus dados
foreach ($vetorDados as $nome => $nota){
    echo " <tr>
          <td>$nome</td>
          <td>$nota</td>
          </tr>";
}
echo "</table>";

$menorIdade = min($vetorDados);
$nomeMenor = array_search($menorIdade, $vetorDados);
echo "<p>A pessoa mais nova a ser cadastrada é:<span> $nomeMenor</span>, que possui <span>$menorIdade</span> </p>";

?>
</body>
</html>