<?php
$tabuada= 0;
if(isset($_POST["bt_tabuada"])){

    $tabuada = $_POST["bt_tabuada"];
}
for($i =0; $i<11;$i++){
    $resultado =$i * $tabuada;
    echo"<br>";
    echo"$i x $tabuada=$resultado";
 

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada</title>
</head>
<body>
    <h1>tabuada</h1>
    <form action="" method="post">
        <label for="">digite sua tabuada</label>
        <input type="text" name="bt_tabuada">
        <br>
        <input type="submit">
    </form> 
</body>
</html>