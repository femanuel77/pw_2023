<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rand</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Jogo do acerto</legend>
            <label for="">Digite um número de 1 a 20:</label>
            <input type="number" name="num">
            <button>Enviar</button>
            <fieldset>
                <legend>Resultado</legend>
                <?php
                    $num = @$_POST['num'];
                    $numeros = [];
                    $is = false;
                    for($i = 0; $i<=5; $i++){
                        $numeros[$i] = rand (1,20);
                        if ($num == $numeros[$i]) {
                            $is = true;
                        }
                    }
                    $numeros = implode(", ", $numeros);
                    if ($is==true) {
                        echo "<p><font color='blue'>Você acertou!</font></p>";
                        echo "<p>Número digitado: $num</p>";
                        echo "<p>Números sorteados: $numeros</p>";
                    }
                    else {
                        echo "<p><font color='red'>Você errou!</font></p>";
                        echo "<p>Número digitado: $num</p>";
                        echo "<p>Números sorteados: $numeros</p>";
                    }
                ?>
            </fieldset>
        </fieldset>
    </form>
</body>