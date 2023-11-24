<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h2 style="text-align:center;">Sistema de votação - IFPI</h2>
        <p>Qual candidato você escolhe para presidente do Grêmio Estudantil?</p>
        <fieldset style="text-align:center;">
            <img src="../img/darth.jpg" alt="" width="10%"><b>Darth Vader</b> - Candidato 1
            <img src="../img/homer.png" alt="" width="15%"><b>Homer Simpson</b> - Candidato 2
        </fieldset>
        <p style="text-align:center; padding:5px;">
            <button type="submit" name="input" id="darth" value="darth">Darth Vader</button>
            <button type="submit" name="input" id="homer" value="homer">Homer Simpson</button>
            <button type="submit" name="input" id="branco" value="branco">Branco</button>
            <button type="submit" name="input" id="nulo" value="nulo">Nulo</button>
        </p>
    </form>
    <fieldset id="resultado">
        <legend align="center">Resultado Parcial</legend>
        <?php
            session_start();
            $_SESSION['votos'];
            $_SESSION['homer'];
            $_SESSION['darth'];
            $_SESSION['branco'];
            $_SESSION['nulo'];
            function AtualizarHomer(){
                $_SESSION['Phomer'] = $_SESSION['homer']/$_SESSION['votos'];
                $_SESSION['Phomer'] = $_SESSION['Phomer']*100;
            }
            function AtualizarDarth(){
                $_SESSION['Pdarth'] = $_SESSION['darth']/$_SESSION['votos'];
                $_SESSION['Pdarth'] = $_SESSION['Pdarth']*100;
            }
            function AtualizarBranco(){
                $_SESSION['Pbranco'] = $_SESSION['branco']/$_SESSION['votos'];
                $_SESSION['Pbranco'] = $_SESSION['Pbranco']*100;
            }
            function AtualizarNulo(){
                $_SESSION['Pnulo'] = $_SESSION['nulo']/$_SESSION['votos'];
                $_SESSION['Pnulo'] = $_SESSION['Pnulo']*100;
            }
            if($_POST['input']){
                $_SESSION['votos']++;
                AtualizarHomer();
                AtualizarDarth();
                AtualizarBranco();
                AtualizarNulo();
                if ($_POST['input']=="homer"){
                    $_SESSION['homer']++;
                    AtualizarHomer();
                }
                else if ($_POST['input']=="darth"){
                    $_SESSION['darth']++;
                    AtualizarDarth();
                }
                else if ($_POST['input']=="branco"){
                    $_SESSION['branco']++;
                    AtualizarBranco();
                }
                else if ($_POST['input']=="nulo"){
                    $_SESSION['nulo']++;
                    AtualizarNulo();
                }
            }
            $_SESSION['Phomer'] = number_format($_SESSION['Phomer'], 2);
            $_SESSION['Pdarth'] = number_format($_SESSION['Pdarth'], 2);
            $_SESSION['Pbranco'] = number_format($_SESSION['Pbranco'], 2);
            $_SESSION['Pnulo'] = number_format($_SESSION['Pnulo'], 2);
            echo "Total de votos: " . $_SESSION['votos'] . "<p>";
            echo "Homer - " . $_SESSION['homer'] . " votos - " . $_SESSION['Phomer'] . "%<br>";
            echo "<hr size='7' color='red' width='" . $_SESSION['Phomer'] . "%' align='left'><p>";
            echo "Darth - " . $_SESSION['darth'] . " votos - " . $_SESSION['Pdarth'] . "%<br>";
            echo "<hr size='7' color='green' width='" . $_SESSION['Pdarth'] . "%' align='left'><p>";
            echo "Branco - " . $_SESSION['branco'] . " votos - " . $_SESSION['Pbranco'] . "%<br>";
            echo "<hr size='7' color='#696969' width='" . $_SESSION['Pbranco'] . "%' align='left'><p>";
            echo "Nulo - " . $_SESSION['nulo'] . " votos - " . $_SESSION['Pnulo'] . "%<br>";
            echo "<hr size='7' color='#C0C0C0' width='" . $_SESSION['Pnulo'] . "%' align='left'><p>";
        ?>
    </fieldset>
</body>
</html>