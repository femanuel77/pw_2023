<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Calculadora</legend>
            <label>Valor 1:</label>
            <input type="number" name="n1">
            <label>Valor 2:</label>
            <input type="number" name="n2">
            <select name="op">
                <option value="som">Somar</option>
                <option value="sub">Subtrair</option>
                <option value="mul">Multiplicar</option>
                <option value="div">Dividir</option>
            </select>
            <button>Enviar</button>
        </fieldset>
    </form>
    <div>
        <fieldset>
            <legend>Resultado:</legend>
            <?php
                $n1 = @$_POST['n1'];
                $n2 = @$_POST['n2'];
                $op = @$_POST['op'];
                if($op == 'som'){
                    $calc = $n1 + $n2;
                    echo "A soma de $n1 e $n2 é $calc";
                }
                if($op == 'sub'){
                    $calc = $n1 - $n2;
                    echo "A subtração de $n1 e $n2 é $calc";
                }
                if($op == 'mul'){
                    $calc = $n1 * $n2;
                    echo "A multiplicação de $n1 e $n2 é $calc";
                }
                if($op == 'div'){
                    $calc = $n1 / $n2;
                    echo "A divisão de $n1 e $n2 é $calc";
                }
            ?>
        </fieldset>
    </div>
</body>
</html>