<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Matrizes na linguagem PHP </title>
 <link rel="stylesheet" href="style.css">
</head>

<body>
 <h1> Matrizes em PHP - listaL4 - exercício 6 </h1>
 <?php

  $matrizRemedios = [$cod1 = $_POST['cod1'] => [$medic1 = $_POST['medic1'], $preco = $_POST['preco1']],
                   $cod2 = $_POST['cod2'] => [$medic2 = $_POST['medic2'], $preco = $_POST['preco2']],
                   $cod3 = $_POST['cod3'] => [$medic3 = $_POST['medic3'], $preco = $_POST['preco3']]];

  $codigoPesquisado = $_POST['pesquisa-codigo'];


 echo "<table>
         <caption> Relação de dados dos medicamentos cadastrados na matriz </caption>
         <tr>
          <th> Código do medicamento </th>
          <th> Nome do medicamento </th> 
          <th> Preço do medicamento </th>
         </tr>";

 foreach($matrizRemedios as $codigo => $vetorInterno)
 {
     echo "<tr>
          <td> $codigo </td>
          <td> $vetorInterno[0] </td>
          <td> $vetorInterno[1] </td>
         </tr>";
 }
 echo "</table>";

 foreach ($matrizRemedios as $codigo => $vetorInterno){
     $vetorAux[$codigo] = $vetorInterno[1];
 }

 $nomeMedicBarato = $matrizRemedios[array_search(min($vetorAux), $vetorAux)][0];

 echo "<p> Medicamento mais barato = <span>$nomeMedicBarato</span> </p>";

 $codigoEncontrado = array_key_exists($codigoPesquisado, $matrizRemedios);

 if (!$codigoEncontrado){
     echo "<p> Caro usuário, o medicamento do usuário de código <span>$codigoEncontrado</span> não foi encontrado na matriz </p>";
 }
 else{
     $nomeMedic = $matrizRemedios[$codigoPesquisado][0];
     $precoMedic = $matrizRemedios[$codigoPesquisado][1];
     echo "<p> Dados do medicamento pesquisado: 
    Código: <span>$codigoPesquisado</span> <br>
    Nome: <span>$nomeMedic</span> <br>
    Preço: <span>$precoMedic</span></p>";
 }

 foreach ($matrizRemedios as $codigo => $vetorInterno){
     $vetorAux[$codigo] = $vetorInterno[0];
 }

 asort($vetorAux);

 echo "<table>
         <caption> Relação de dados dos medicamentos cadastrados na matriz, ordenados em ordem alfabética </caption>
         <tr>
          <th> Código do medicamento </th>
          <th> Nome do medicamento </th> 
          <th> Preço do medicamento </th>
         </tr>";

 foreach ($vetorAux as $codigo => $medicamento){
     $preco = $matrizRemedios[$codigo][1];
     echo "<tr>
               <td> $codigo</td>
               <td> $medicamento</td>
               <td> $preco</td>
               </tr>";
 }

 echo "</table>";
  ?>
</body>
</html>