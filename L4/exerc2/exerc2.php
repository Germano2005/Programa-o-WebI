<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Matrizes na linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Matrizes em PHP - listaL4 - exercício 2 </h1>
 <?php
  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  $matric1 = $_POST["matric1"];
  $matric2 = $_POST["matric2"];
  $matric3 = $_POST["matric3"];

  $media1  = $_POST['media1'];
  $media2  = $_POST["media2"];
  $media3  = $_POST["media3"];

  $matrizAlunos = [$matric1 => [$aluno1, $media1],
                   $matric2 => [$aluno2, $media2],
                   $matric3 => [$aluno3, $media3]];

  //para calcularmos a média geral da turma, vamos percorrer a matriz com o foreach, criar um vetor auxiliar com apenas as médias de cada aluno e usar a função array_sum sobre este vetor auxiliar
  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   $vetorAuxiliar[] = $vetorInterno[1];
   }

  $media = array_sum($vetorAuxiliar)/count($vetorAuxiliar);
  $mediaFormatada = number_format($media, 1, ",", ".");

  echo "<p> De acordo com os dados na matriz, a média geral da turma é igual a <span> $mediaFormatada </span> </p>";
 ?> 
</body>
</html>