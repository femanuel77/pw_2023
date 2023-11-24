<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Questão 1</legend>
            <label>Digite um número:</label>
            <input type="text" name="num" id="num">
            <button>Enviar</button>
            <fieldset>
                <legend>Resultado</legend>
                <?php
                    $num = @$_POST['num'];
                    $num = intval($num);
                    $str = "";
                    for ($i = 1; $i <= $num; $i++){
                        $str = $str . " " . $i;
                        echo "$str<br>";
                    }
                ?>
            </fieldset>
        </fieldset>
    </form>
    <p>&nbsp;</p>
    <form action="" method="post">
        <fieldset>
            <legend>Questão 3</legend>
            <?php
                $altura_Chico = 1.50;
                $altura_Ze = 1.10;
                $anos = 0;
                while ($altura_Ze<=$altura_Chico){
                    $altura_Chico += 0.02;
                    $altura_Ze += 0.03;
                    $anos++;
                }
                echo ("Em $anos anos, Zé será maior que Chico!"); 
            ?>
        </fieldset>
    </form>
    <p>&nbsp;</p>
    <form action="" method="post">
        <fieldset>
            <legend>Questão 5 - B</legend>
            <label for="">Digite um número para descobrir seu fatorial:</label>
            <input type="number" name="num" id="num">
            <button>Enviar</button>
            <?php
                $num = @$_POST['num'];
                $fat = 1;
                for ($i = $num; $i > 0; $i--) {
                    $fat *= $i;
                }
                echo "<br><br>!${num} = ${fat}";
            ?>
        </fieldset>
    </form>
    <form action="" method="post">
        <fieldset>
            <legend>Questão 6</legend>
            
        </fieldset>
    </form>
</body>
</html>