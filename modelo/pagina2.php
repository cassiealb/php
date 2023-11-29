<?php
$numero1=0;
$numero2=0;

if(isset($_POST["bt_numero1"])){

    $numero1 = $_POST["bt_numero1"];
    $numero2 = $_POST["bt_numero2"];

    
    echo("o numero recebido foi: " . $numero1);
    echo("<br>");
    echo("o numero recebido foi: " . $numero2);

     if($numero1 >$numero2){
    echo("<h2>");
    echo("o $numero1 é maior");
    echo("</h2>");
     }elseif($numero2 >$numero1){
        echo("<h2>");
        echo("o $numero2 é maior");
        echo("</h2>");
     }else{
        echo("<h2>");
        echo("o $numero1 e $numero2 sao iguais");
        echo("</h2>");
     }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina 2</title>

</head>

<body>
    <h1>pagina2</h1>
    <br>

    <a href="maiormumero.php">voltar</a>

</body>

</html>