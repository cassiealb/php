<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exibir</title>
</head>
<body>
    <h1>exibir</h1>
    <br>
  

<?php
$nome= 0;
$endereço= 0;
$cidade= 0;
$estado= 0;
$pais= 0;
$rg= 0;
$cpf= 0;
$sus= 0;
$titulo= 0;
$sexo= 0;

if(isset($_POST["bt_nome"])){

    $nome = $_POST["bt_nome"];
    $endereço = $_POST["bt_endereço"];
    $cidade = $_POST["bt_cidade"];
    $estado = $_POST["bt_estado"];
    $pais = $_POST["bt_pais"];
    $rg = $_POST["bt_rg"];
    $cpf = $_POST["bt_cpf"];
    $sus = $_POST["bt_sus"];
    $titulo = $_POST["bt_titulo"];
    $sexo = $_POST["bt_sexo"];
    
    echo("o nome recebido foi: " . $nome);
    echo("<br>");
    echo("o endereço recebido foi: " . $endereço);
    echo("<br>");
    echo("a cidade recebido foi: " . $cidade);
    echo("<br>");
    echo("o estado recebido foi: " . $estado);
    echo("<br>");
    echo("o pais recebido foi: " . $pais);
    echo("<br>");
    echo("o rg recebido foi: " . $rg);
    echo("<br>");
    echo("o cpf recebido foi: " . $cpf);
    echo("<br>");
    echo("o sus recebido foi: " . $sus);
    echo("<br>");
    echo("o titulo recebido foi: " . $titulo);
    echo("<br>");
    echo("o sexo recebido foi: " . $sexo);
    echo("<br>");

}
?>
  <a href="cliente.php">voltar</a>
</body>
</html>
