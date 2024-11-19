<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fundamentos da linguagem PHP </title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<h1> Fundamentos do PHP - listaL3 - exercício 3 - resposta do PHP </h1>
<p></p>
<?php
// recebendo os dados do formulário e guardando em três variáveis simples
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$aluno1 = $_POST['nome1'];
$aluno2 = $_POST['nome2'];
$aluno3 = $_POST['nome3'];

//va,os criar o vetor, usando o nome de cada aluno com o índice associativo
$vetorAlunos = [$aluno1 => $nota1, $aluno2 => $nota2, $aluno3 => $nota3];

echo "<table> 
<caption> Relação de dados dos alunos do CDTS/PRW1</caption>
    <tr> 
        <th>Nome</th>
        <th>Nota</th>
        
    </tr>";

arsort($vetorAlunos);

//para compormos o corpo da tabela, necessitamos navegar por todos o vetor e extrair seus dados
foreach ($vetorAlunos as $aluno => $nota){
    echo " <tr>
          <td>$aluno</td>
          <td>$nota</td>
          </tr>";
}

echo "</table>";


?>
</body>
</html>