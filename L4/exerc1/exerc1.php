<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Matrizes na linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Matrizes em PHP - listaL4 - exercício 1 </h1>
 <?php
  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  $matric1 = $_POST["matric1"];
  $matric2 = $_POST["matric2"];
  $matric3 = $_POST["matric3"];

  $media1  = $_POST["media1"];
  $media2  = $_POST["media2"];
  $media3  = $_POST["media3"];

  //criando a matriz em PHP: a matrícula será o índice I da matriz
  $matrizAlunos = [$matric1 => [$aluno1, $media1],
                   $matric2 => [$aluno2, $media2],
                   $matric3 => [$aluno3, $media3]];

  /*echo "<pre>";
  print_r($matrizAlunos);
  echo "</pre>";*/

  echo "<table>
         <caption> Relação de dados acadêmicos dos alunos do CTDS/PRWI </caption>
         <tr>
          <th> Matrícula do aluno </th>
          <th> Nome do aluno </th> 
          <th> Média de PRWI </th>
         </tr>";

  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   echo "<tr>
          <td> $matric </td>
          <td> $vetorInterno[0] </td>
          <td> $vetorInterno[1] </td>
         </tr>";
   }
 echo "</table>";
 ?> 
</body>
</html>