<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2916/2916115.png">
    <title>Atividade 8</title>
</head>
<body>
    <form action="" method="post">
        <legend>Entre com uma lista de números separados por vírgula para serem somados:</legend>
        <input type="text" name="num" id="num">
        <button>Enviar</button>
    </form>
    <div class="resultado">
        <?php
            $num = @$_POST['num'];
            $num = explode(",", $num);
            $soma = array_sum($num);
            echo "Resultado: $soma";
        ?>
    </div>
</body>
</html>