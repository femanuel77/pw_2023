<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset style="border-width:10px;border-color:blue;">
            <legend>Questão 1</legend>
            Qual linguagem você trabalha?<br>
            <input type="radio" name="input" id="java" value="java">Java<br>
            <input type="radio" name="input" id="php" value="php">PHP<br>
            <input type="radio" name="input" id="python" value="python">Python<p>
            <input type="submit" value="Votar" name="votar">
        </fieldset>
    </form>
    <div id="resultado">
        <?php
            session_start();
            @$_SESSION['votos'];
            @$_SESSION['java'];
            @$_SESSION['php'];
            @$_SESSION['python'];
            function AtualizarJava(){
                $_SESSION['Pjava'] = $_SESSION['java']/$_SESSION['votos'];
                $_SESSION['Pjava'] = $_SESSION['Pjava']*100;
            }
            function AtualizarPhp(){
                $_SESSION['Pphp'] = $_SESSION['php']/$_SESSION['votos'];
                $_SESSION['Pphp'] = $_SESSION['Pphp']*100;
            }
            function AtualizarPython(){
                $_SESSION['Ppython'] = $_SESSION['python']/$_SESSION['votos'];
                $_SESSION['Ppython'] = $_SESSION['Ppython']*100;
            }
            if($_POST['input']){
                $_SESSION['votos']++;
                AtualizarJava();
                AtualizarPhp();
                AtualizarPython();
                if ($_POST['input']=="java"){
                    $_SESSION['java']++;
                    AtualizarJava();
                }
                else if ($_POST['input']=="php"){
                    $_SESSION['php']++;
                    AtualizarPhp();
                }
                else if ($_POST['input']=="python"){
                    $_SESSION['python']++;
                    AtualizarPython();
                }
            }
            $_SESSION['Pjava'] = number_format($_SESSION['Pjava'], 2);
            $_SESSION['Pphp'] = number_format($_SESSION['Pphp'], 2);
            $_SESSION['Ppython'] = number_format($_SESSION['Ppython'], 2);
            echo "<p>&nbsp;</p>";
            echo "Total de votos: " . $_SESSION['votos'] . "<p>";
            echo "Java - " . $_SESSION['java'] . " votos - " . $_SESSION['Pjava'] . "%<br>";
            echo "<hr size='15' color='red' width='" . $_SESSION['Pjava'] . "%' align='left'><p>";
            echo "PHP - " . $_SESSION['php'] . " votos - " . $_SESSION['Pphp'] . "%<br>";
            echo "<hr size='15' color='green' width='" . $_SESSION['Pphp'] . "%' align='left'><p>";
            echo "Python - " . $_SESSION['python'] . " votos - " . $_SESSION['Ppython'] . "%<br>";
            echo "<hr size='15' color='blue' width='" . $_SESSION['Ppython'] . "%' align='left'><p>";
        ?>
    </div>
</body>
</html>