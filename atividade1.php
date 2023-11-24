<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="questão-1">
        <fieldset>
            <legend>Questão 1</legend>
            <form method="post">
                <label>1ª nota:</label>
                <input type="text" name="n1"><br>
                <label>2ª nota:</label>
                <input type="text" name="n2"><br>
                <button>Enviar</button>
            </form>
            <fieldset>
                <legend>Resultado</legend>
                <?php
                    //1ª questão
                    $n1 = @$_POST['n1'];
                    $n2 = @$_POST['n2'];
                    $media = ($n1+$n2)/2;
                    $media = number_format($media, 2);
                    echo "A média aritmética dos números $n1 e $n2 é $media";
                ?>
            </fieldset>
        </fieldset>
    </div>
    <p></p>
    <div id="questão-2">
        <form action="" method="post">
            <fieldset>
                <legend>Questão 2</legend>
                <label>Digite um número para saber seus divisores:</label>
                <input type="number" name="n" id="n">
                <button>Enviar</button>
                <fieldset>
                    <legend>Restultado</legend>
                    <?php
                        $n = @$_POST['n'];
                        $d = "1 ";
                        for($i = 2; $i<=$n; $i++){
                            if($n%$i==0){
                                $d = $d . $i . " ";
                            }
                        }
                        echo "Os divisores de $n são $d!";
                    ?>
                </fieldset>
            </fieldset>
        </form>
    </div>
    <p></p>
    <div id="questão-3">
        <form method="post">
            <fieldset>
                <legend>Questão 3</legend>
                <label>Digite o salário do funcionário:</label>
                <input type="text" name="salario" id="">
                <button>Enviar</button>
                <div>
                    <?php
                        $salario = @$_POST['salario'];
                        if ($salario<=300){
                            $salario = $salario * (150/100);
                            $salario = number_format($salario, 2);
                            echo "O salário do funcionário após o reajuste é de $salario reais!";
                        }
                        else {
                            $salario = $salario * (130/100);
                            $salario = number_format($salario, 2);
                            echo "O salário do funcionário após o reajuste é de R$$salario!";
                        }
                    ?>
                </div>
            </fieldset>
        </form>
    </div>
    <p></p>
    <div class="questão-4">
        <form action="" method="post">
            <fieldset>
                <legend>Questão 4</legend>
                <label>Qual seu sexo:</label>
                <select name="sexo" id="sexo">
                    <option value="m">Masculino</option>
                    <option value="f">Feminino</option>
                </select>
                <label>Qual a sua altura:</label>
                <input type="text" name="altura" placeholder="Digite sua altura (em metros)...">
                <button>Enviar</button>
                <?php
                    $genero = $_POST['sexo'];
                    $altura = $_POST['altura'];
                    if($genero=='m'){
                        $peso_ideal = (72.7 * $altura) - 58;
                        $peso_ideal = number_format($peso_ideal, 2);
                        echo "<br>Seu peso ideal é de $peso_ideal!";
                    }
                    else if($genero=='f'){
                        $peso_ideal = (62.1 * $altura) - 44.7;
                        $peso_ideal = number_format($peso_ideal, 2);
                        echo "<br>Seu peso ideal é de $peso_ideal!";
                    }
                ?>
            </fieldset>
        </form>
    </div>
</body>
</html>