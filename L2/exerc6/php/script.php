<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de informática</title>
</head>
<body>
    <h1>Atividade PHP</h1>

    <?php
        $valorCompra = $_POST['total-compra'];
        $taxaCommisao = $_POST['percentual'];

        $valorComissaoVendedor = $valorCompra * ($taxaCommisao / 100);

        $valorformat = number_format($valorComissaoVendedor, 2, ",", ".");

        echo "<p> Comissão do vendedor: <span> R$  $valorformat </span> </p>"
    ?>
</body>
</html>