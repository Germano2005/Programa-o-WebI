<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 1 da lista 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Sistema de notas de alunos</h1>

<form action="script.php" method="post">
    <fieldset>
        <legend>Formulário</legend>

        <label>Digite o nome do aluno: </label>
        <input type="text" name="nome1" autofocus>


        <label>Digite a nota1 do aluno: </label>
        <input type="number" name="nota1" min="0" max="10" step="1">

        <label>Digite a nota2 do aluno: </label>
        <input type="number" name="nota2"  min="0" max="10" step="1">


    </fieldset>
    <button type="submit" name="enviar-dados">Submeter os dados</button>
</form>

<?php

function testarNome($aluno)
{
    //retirar os espaços em branco do nome do aluno
    $aluno = trim($aluno);
    //contar o número de caracteres do nome do aluno
    $numeroDeCaracteres = strlen($aluno);

    //testar a condição de erro
    if($numeroDeCaracteres == 0)
    {
        exit("<p> A caixa nome do aluno não pode estar vazia. Aplicação encerrada! </p>");
    }
}

//==============================================================

function testarNota1($nota1)
{
    //usando uma função pronta do PHP para testar valores numéricos
    $valorTestado = filter_var($nota1, FILTER_VALIDATE_FLOAT);

    //testar se o valor retornado do filter_var é falso. Note que, para o zero ser aceito como nota válida, estamos usando o operador de identidade do PHP ===
    if($valorTestado === false OR $valorTestado < 0 OR $valorTestado > 10)
    {
        exit("<p> A caixa da primeira nota do aluno deve  ser um valor numérico maior ou igual a zero E menor ou igual a 10. Aplicação encerrada! </p>");
    }
}

//=============================================================

function testarNota2($nota2)
{
    $valorTestado = filter_var($nota2, FILTER_VALIDATE_FLOAT);

    if($valorTestado === false OR $valorTestado < 0 OR $valorTestado > 10)
    {
        exit("<p> A caixa da segunda nota do aluno deve  ser um valor numérico maior ou igual a zero E menor ou igual a 10. Aplicação encerrada! </p>");
    }
}

function calcularMedia($nota1, $nota2)
{
    $media = ($nota1 + $nota2)/2;

    return $media;
}

function verificarAprovacao($media)
{
    echo "<p>Media do aluno: ";

    if ($media >= 6){
        echo "<span style='color: #9ccb2f'>$media</span> <br> Aprovado!</p>";
    }
    else{
      echo "<span style='color: #ff2020'>$media</span> <br> Reprovado!</p>";
    }
}



//quando misturamos, em um mesmo arquivo .php, elementos de formulário com comandos para receber e processar este formulário, devemos usar a linha de comando abaixo, evitando o surgimento de mensagens de erro

if(isset($_POST['enviar-dados']))
{
    //essas área é chamada de script principal no PHP
    //se o PHP entrar neste bloco, ele sabe, com certeza, que o botão submit foi pressionado e, portanto, os dados do formulásrio já estão disponíveis para serem recebidos
    $aluno = $_POST['nome1'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    //invocar uma função de usuário do PHP para testar se o nome do aluno não está vazio
    testarNome($aluno);

    //invocar uma subrotina para testar a primeira nota do aluno
    testarNota1($nota1);

    //invocar uma subrotina para testar a segunda nota do aluno
    testarNota2($nota2);

    //invocar uma função de usuário para calcular e RETORNAR a média desses dois aluno

    $mediaRetornada = calcularMedia($nota1, $nota2);

    //invocar uma função se o aluno foi aprovado ou reprovado de acordo coma média obtida acima
    verificarAprovacao($mediaRetornada);

}





?>

</body>
</html>
