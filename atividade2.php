<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios 2</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Questão 1</legend>
            <label>1º número:</label>
            <input type="text" name="n1">
            <label>2º número:</label>
            <input type="text" name="n2">        
            <label>3º número:</label>
            <input type="text" name="n3">
            <button>Enviar</button>
            <fieldset>
                <legend>Resultado:</legend>
                    <?php
                        $n1 = @$_POST['n1'];
                        $n2 = @$_POST['n2'];
                        $n3 = @$_POST['n3'];
                        if($n1>=$n2 && $n1>=$n3){
                            echo "<font color='red'>$n1</font><font color='gray'> $n2 $n3</font>";
                        }
                        else if($n2>=$n1 && $n2>=$n3){
                            echo "<font color='red'>$n2</font><font color='gray'> $n1 $n3</font>";
                        }
                        else{
                            echo "<font color='red'>$n3</font><font color='gray'> $n1 $n2</font>";
                        }
                    ?>
            </fieldset>
        </fieldset>
    </form>
    <p>&nbsp;</p>
    <form action="" method="post">
        <fieldset>
            <legend>
                Questão 2
            </legend>
            <label>Digite o dia do seu nascimento:</label>
            <input type="number" name="dia">
            <label>Digite o mês do seu nascimento:</label>
            <input type="number" name="mes">
            <label>Digite o ano do seu nascimento:</label>
            <input type="number" name="ano">
            <button>Enviar</button>
            <fieldset>
                <legend>Resultado</legend>
                <?php
                    $diaN = @$_POST['dia'];
                    $mesN = @$_POST['mes'];
                    $anoN = @$_POST['ano'];
                    $diaH = intval(date('d'));
                    $mesH = intval(date('m'));
                    $anoH = intval(date('y'));
                    $anoH = $anoH + 2000;
                    $dias = $diaH - $diaN;
                    $meses = $mesH - $mesN;
                    $anos = $anoH - $anoN;
                    if ($dias < 0) {
                        $meses--;
                        $dias += 30;
                    }
            
                    if ($meses < 0) {
                        $anos--;
                        $meses += 12;
                    }
                    echo "Você tem $anos anos, $meses meses e $dias dias!"
                ?>
            </fieldset>
        </fieldset>
    </form>
    <p>&nbsp;</p>
    <form method="post">
        <fieldset>
            <legend>Questão 3</legend>
            <legend>Digite a cordenada x do primeiro ponto:</legend>
            <input type="text" name="x1" id="x1">
            <legend>Digite a cordenada y do primeiro ponto:</legend>
            <input type="text" name="y1" id="y1">
            <legend>Digite a cordenada x do segundo ponto:</legend>
            <input type="text" name="x2" id="x2">
            <legend>Digite a cordenada y do segundo ponto:</legend>
            <input type="text" name="y2" id="y2">
            <p>
            <button>Enviar</button>
            <fieldset>
                <legend>Resultado</legend>
                <?php
                    $x1 = @$_POST['x1'];
                    $x2 = @$_POST['x2'];
                    $y1 = @$_POST['y1'];
                    $y2 = @$_POST['y2'];
                    $distancia = sqrt((($x2-$x1)**2)+(($y2-$y1)**2));
                    $distancia = number_format($distancia, 2);
                    echo "A distância entre os pontos de coordenadas ($x1, $y1) e ($x2, $y2) é $distancia!";
                ?>
            </fieldset>
        </fieldset>
    </form>
    <p>&nbsp;</p>
    <form action="" method="post">
        <fieldset>
            <legend>Questão 4</legend>
            <label>Digite a idade do nadador:</label>
            <input type="text" name="idade">
            <button>Enviar</button>
            <fieldset>
                <legend>Resultado</legend>
                <?php
                    $idade = @$_POST['idade'];
                    if($idade>=5 && $idade<=7)
                        echo "O nadador está na categoria Infantil A!";
                    else if($idade>=8 && $idade<=10)
                        echo "O nadador está na categoria Infantil B!";
                    else if($idade>=11 && $idade<=13)
                        echo "O nadador está na categoria Juvenil A!";
                    else if($idade>=14 && $idade<=17)
                        echo "O nadador está na categoria Juvenil B!";
                    else if($idade>=18)
                        echo "O nadador está na categoria Adulto!";
                ?>
            </fieldset>
        </fieldset>
    </form>
    <p>&nbsp;</p>
    <form action="" method="post">
        <fieldset>
            <legend>Questão 5</legend>
            <label>Digite seu cargo ou código de cargo:</label>
            <input type="text" name="cargo">
            <label>Digite seu salário atual:</label>
            <input type="text" name="salario">
            <button>Enviar</button>
            <fieldset>
                <legend>Resultado</legend>
                <?php
                $cargo = @$_POST['cargo'];
                $cargo = strtolower ($cargo);
                $salario = @$_POST['salario'];
                if($cargo=='gerente' || $cargo=='101'){
                    $salario = $salario * (110/100);
                    $salario = number_format($salario, 2, ",", ".");
                    echo "Seu novo salário é de R$$salario!";
                }
                else if($cargo=='engenheiro' || $cargo=='102'){
                    $salario = $salario * (120/100);
                    $salario = number_format($salario, 2,  ",", ".");
                    echo "Seu novo salário é de R$$salario!";
                }
                else if($cargo=='tecnico' || $cargo=='103'){
                    $salario = $salario * (130/100);
                    $salario = number_format($salario, 2,  ",", ".");
                    echo "Seu novo salário é de $salario!";
                }
                else{
                    $salario = $salario * (140/100);
                    $salario = number_format($salario, 2,  ",", ".");
                    echo "Seu novo salário é de R$$salario!";
                }
                ?>
            </fieldset>
        </fieldset>
    </form>
    <p>&nbsp;</p>
    <form action="" method="post">
        <fieldset>
            <legend>6ª questão</legend>
            <label>1ª nota:</label>
            <input type="text" name="nota1">
            <label>2ª nota:</label>
            <input type="text" name="nota2">
            <label>3 nota:</label>
            <input type="text" name="nota3">
            <button>Enviar</button>
            <fieldset>
                <legend>Resultado</legend>
                <?php
                    $n1 = @$_POST['nota1'];
                    $n2 = @$_POST['nota2'];
                    $n3 = @$_POST['nota3'];
                    $me = ($n1 + $n2 + $n3)/3;
                    $ma = ($n1 + $n2*2 + $n3*3 + $me)/7;
                    $ma = number_format($ma, 2);
                    if($ma<4){
                        echo "Sua média de aproveitando é de $ma e seu conceito é E!";
                    }
                    else if($ma>=4 && $ma<=6){
                        echo "Sua média de aproveitando é de $ma e seu conceito é D!";
                    }
                    else if($ma>=6 && $ma<=7.5){
                        echo "Sua média de aproveitando é de $ma e seu conceito é C!";
                    }
                    else if($ma>=7.5 && $ma<=9){
                        echo "Sua média de aproveitando é de $ma e seu conceito é B!";
                    }
                    else if($ma>9){
                        echo "Sua média de aproveitando é de $ma e seu conceito é A!";
                }
                ?>
            </fieldset>
        </fieldset>
    </form>
</body>
</html>