<?php
    session_start();
    $_SESSION['user'] = @$_POST['user'];
    $_SESSION['pass'] = @$_POST['senha'];
    if(isset($_POST['user'])){
        header('Location:prova2.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financeiro IFPI 2.0</title>
</head>
<body>
    <div class="main">
        <h3>Financeiro IFPI 2.0</h3>
        <div class="login">
            <form action="" method="post">
                <input type="text" name="user" id="user" class="imp" placeholder="User"><p>
                <input type="password" name="senha" id="senha" class="imp" placeholder="Senha"><p>
                <div class="sub">
                    <input type="submit" value="Enviar" class="submit">
                </div>
            </form>
        </div>
    </div>
    <style>
        body {
            font-family: Arial;
        }
        .main {
            border-radius: 10px;
            width: 20%;
            margin: 30px auto auto auto;
        }
        h3{
            border-radius: 10px 10px 0 0;
            color: black;
            background-color: lightgreen;
            margin: 0;
            padding: 10px;
        }
        .login {
            font-size: 15px;
            border-radius: 0 0 10px 10px;
            background-color: silver;
            margin: 0;
            padding: 10px;
        }
        .sub{
            text-align: center;
            margin-bottom: 5px;
        }
        .submit{
            border: 2px solid silver;
            align-items: center;
            display: inline-block;
            height: 30px;
        }
        .imp {
            width: 98%;
            height: 20px;
            border: 2px solid silver;
        }
    </style>
</body>
</html>