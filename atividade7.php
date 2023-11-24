<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
</head>
<body>
    <div class="main">
        <table align="center" border="1" cellspacing="0" width="50%">
            <tr style="background-color:#a886e0">
                <td>Elemento</td>
                <td>Dia da semana</td>
                <td>Prato do dia</td>
                <td>Preço</td>
            </tr>
            <tr class="Domingo">
                <td>0</td>
                <td>Domingo</td>
                <td>Lasanha a quatro queijos</td>
                <td>R$ 12,60</td>
            </tr>
            <tr class="Segunda">
                <td>1</td>
                <td>Segunda-feira</td>
                <td>Frango ao molho madeira</td>
                <td>R$ 10,00</td>
            </tr>
            <tr class="Terça">
                <td>2</td>
                <td>Terça-feira</td>
                <td>Arroz à grega</td>
                <td>R$ 09,40</td>
            </tr>
            <tr class="Quarta">
                <td>3</td>
                <td>Quarta-feira</td>
                <td>Feijoada à moda da casa</td>
                <td>R$ 11,20</td>
            </tr>
            <tr class="Quinta">
                <td>4</td>
                <td>Quinta-feira</td>
                <td>Nhoque paulista</td>
                <td>R$ 08,50</td>
            </tr>
            <tr class="Sexta">
                <td>5</td>
                <td>Sexta-feira</td>
                <td>Bacalhau ao forno</td>
                <td>R$ 15,20</td>
            </tr>
            <tr class="Sábado">
                <td>6</td>
                <td>Sábado</td>
                <td>Feijão branco</td>
                <td>R$ 10,00</td>
            </tr>
        </table>
    </div>
    <div class="php">
        <?php
            $prato = ['Lasanha a quatro queijos', 'Frango ao molho madeira', 'Arroz à grega', 'Feijoada à moda da casa', 'Nhoque paulista', 'Bacalhau ao forno', 'Feijão branco'];
            $semana = ['Domingo', 'Segunda','Terça','Quarta','Quinta','Sexta','Sábado'];
            $preco = ['R$ 12,60', 'R$ 10,00', 'R$ 09,40', 'R$ 11,20', 'R$ 08,50', 'R$ 15,20', 'R$ 10,00'];
            $dia = date('w');
            echo    "Hoje é <b>$semana[$dia]</b><br>
                    Nossa sugestão para hoje é <b>$prato[$dia]</b><br>
                    Preço: <b>$preco[$dia]</b>";
        ?>
    </div>
    <style>
        .main {
            margin: 20px auto;
        }
        tr, td{
            padding: 5px;
        }
        <?php echo ".$semana[$dia]"?>{
            background-color: #CD853F;
        }
        .php{
            margin: 0 25% 0 25%;
        }
    </style>
</body>
</html>