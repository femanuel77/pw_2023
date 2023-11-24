<?php
    session_start();
    if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin' && $_SESSION['pass'] == '1234'){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SisIFPI</title>
</head>
<body>
    <h2>SisIFPI</h2>
    <div class="buttons">
        <a href="login2.php" class="button"><button class="button">Início</button></a>
        <a href="login.php" class="button"><button class="button">Sair</button></a>
    </div>
    <div class="corpo">Usuário <b>Administrador</b> logado no sistema!</div>
</body>
<style>
    body {
        font-family: Arial;
        background-color: silver;
        margin: 0;
        padding: 0;
    }
    h2 {
        margin: 0;
        background-color: #008700;
        color: white;
        padding: 10px;
    }
    .buttons {
        width: 100%;
        background-color: #009100;
        color: white;
    }
    .button{
        text-align: center;
        text-decoration: none;
        margin: 10px;
        background-color: #00ba00;
        border: 0;
        color: white;
        padding: 5px;
        width: 4%;
    }
    .corpo {
        margin: 10px;
    }
</style>
</html>
<?php
    }
    else{
        header('Location:login.php');
    }
?>