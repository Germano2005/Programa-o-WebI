<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Matrizes na linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Matrizes em PHP - listaL4 - exercício 3 </h1>
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

  //para descobrirmos todos os dados do aluno com a maior média individual, vamos, com um foreach, criar um vetor auxiliar. Este vetor conterá a matrícula como índice associativo, e a média de cada aluno como conteúdo dentro da célula
  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   $vetorAuxiliar[$matric] = $vetorInterno[1];
   }

   //Neste ponto, já temos, no vetorAuxiliar, a matrícula de cada aluno (índice) e a média parcial (conteúdo). Vamos usar a função max()
   $maiorNota = max($vetorAuxiliar);

   //Já sabemos o valor da maior nota. Vamos usar a função array_search para descobrirmos a matrícula do aluno com a maior nota
   $matricAlunoDestaque = array_search($maiorNota, $vetorAuxiliar);

   //Para descobrirmos o nome do aluno-destaque, basta utilizarmos a sua matrícula na matriz de alunos, como índice I. O valor do índice J é o zero
   $nomeAlunoDestaque = $matrizAlunos[$matricAlunoDestaque][0];

   echo "<p> Dados cadastrais do aluno com a maior média: <br>
             Nome = <span> $nomeAlunoDestaque </span> <br>
             Matrícula = <span> $matricAlunoDestaque </span> <br>
             Maior média = <span> $maiorNota </span> </p>";
  ?> 
</body>
</html>