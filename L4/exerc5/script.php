<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Matrizes na linguagem PHP </title>
 <link rel="stylesheet" href="style.css">
</head>

<body>
 <h1> Matrizes em PHP - listaL4 - exercício 5 </h1>
 <?php

  $matrizAlunos = [$matric1 = $_POST['matric1'] => [$aluno1 = $_POST['aluno1'], $media1 = $_POST['media1']],
                   $matric2 = $_POST['matric2'] => [$aluno2 = $_POST['aluno2'], $media2 = $_POST['media2']],
                   $matric3 = $_POST['matric3'] => [$aluno3 = $_POST['aluno3'], $media3 = $_POST['media3']]];

  //vamos percorrer a matriz e criar um vetor auxiliar. o índice será a matrícula e o conteúdo de cada célula será a média de PRW1

 foreach ($matrizAlunos as $matric => $vetorInterno){
     $vetorAux[$matric] = $vetorInterno[1];
 }

 arsort($vetorAux);

 echo "<table>
         <caption> Relação de dados acadêmicos dos alunos do CTDS/PRWI </caption>
         <tr>
          <th> Matrícula do aluno </th>
          <th> Nome do aluno </th> 
          <th> Média de PRWI </th>
         </tr>";

 foreach($vetorAux as $matric => $media)
 {
     echo "<tr>
          <td> $matric </td>
          <td> {$matrizAlunos[$matric][0]} </td>
          <td> $media </td>
         </tr>";
 }
 echo "</table>";


  ?> 
</body>
</html>