<?php
     include_once ('viacep.php');
     $address = getAddres();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo da API</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<div class="row d-flex justify-content-center">
<div class="col-md-4 border border-dark rounded mt-4">
    <h3 class="py-3 text-center">Digite o CEP para encontrar o endereço.</h3>

    <form action="." method="post" class="d-flex  flex-column py-3">
        <div class="form-inline my-2 my-lg-0 py-2">
        <input class="form-control mr-sm-2" type="text" placeholder="Digite o CEP.." aria-label="Search" name="cep" value="<?php echo $address->cep ?>">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </div>
        <input class="py-1" type="text" placeholder="rua" name="rua" value="Rua: <?php echo $address->logradouro ?>">
        <input class="py-1" type="text" placeholder="bairro" name="bairro" value="Bairro: <?php echo $address->bairro ?>">
        <input class="py-1" type="text" placeholder="cidade" name="cidade" value="Cidade: <?php echo $address->localidade ?>">
        <input class="py-1" type="text" placeholder="estado" name="estado" value="Estado: <?php echo $address->uf ?>">
    </form>
</div>
</div>

</body>
</html>