<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contato</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h1>pagina de contato</h1>
        <br>
        <form action="" method="post">
            <div class="mb-33">
            <label for="">nome:</label>
            <input type="text" name="bt_nome">
    </div>
    <br>
    <div class="mb-3">
        <label for="">telefone:</label>
        <input type="text" name="bt_telefone">
    </div>
    <div class="mb-3">
        <label for="">mensagem:</label>
        <br>
        <textarea name="bt_mensagem" id="" cols="50" rows="10"></textarea>
    </div>
    <hr>
    <input class="btn btn-success" type="submit">
    <input class="btn btn-warning" type="reset" value="limpar">
    <a class="btn btn-danger" href="#">cancelar</a>
    <hr>
    </form>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>