<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 2 da lista 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Idade de um usuário</h1>

<form action="script.php" method="post">
    <fieldset>
        <legend>Formulário</legend>

        <label>Digite a idade da pessoa: </label>
        <input type="text" name="idade" autofocus>

    </fieldset>
    <button type="submit" name="enviar-dados">Submeter os dados</button>
</form>

<?php

//declaração das funções

function testarIdade($idade)
{
    $valorTestado = filter_var($idade, FILTER_VALIDATE_INT);

    if ($valorTestado === false OR $valorTestado < 0 OR $valorTestado > 120){
        exit ("<p>A caixa da idade exige um valor numérico maior ou igual a zero. Aplicação encerrada!</p>");
    }
}

function podeVotar($idade)
{
    if ($idade >= 16){
        echo "<p>A pessoa tem <span style='color: #9ccb2f'>$idade</span> e já pode voltar.</p>";
    }
    else{
        echo "<p>A pessoa tem <span style='color: #ff2020'>$idade</span> e ainda não pode votar.</p>";
    }
}

//área da script principal

if (isset($_POST['enviar-dados'])){
    $idade = trim($_POST['idade']);

//invocar a função que testa a idade
    testarIdade($idade);

//invocar a função que diz se a pessoa está apta ou não a votar

    podeVotar($idade);
}

?>

</body>
</html>


