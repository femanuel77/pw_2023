<?php
    session_start();
    if(isset($_SESSION['user']) && $_SESSION['user'] == 'francisco' || $_SESSION['user'] == 'Francisco' && $_SESSION['pass'] == '07082006'){
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financeiro IFPI 2.0</title>
</head>
<body>
    <h2>Financeiro IFPI 2.0</h2>
    <div class="corpo">Bem-vindo, <b><?php echo ucfirst($_SESSION['user']); ?>!</b></div>
    <div class="dados">
        <form action="" method="post">
            <legend>Descrição</legend>
            <input type="text" name="descricao" id="descricao"><p>
            <legend>Valor</legend>
            <input type="text" name="valor" id="valor"><p>
            <legend>Tipo</legend>
            <select name="tipo" id="tipo">
                <option value="1">Entrada</option>
                <option value="0">Saída</option>
            </select><p>
            <button type="submit" name="incluir" value="incluir" class="button">Incluir</button>
        </form>
    </div>
    <div class="resultado">
        <?php
            $descricao = $_POST['descricao'];
            $valor = "R$ " . number_format($_POST['valor'], 2, ",", ".");
            $tipo = $_POST['tipo'];
            $txt1 = "<table>
            <tr>
            <td><b>Descrição</b></td>
            <td><b>Valor</b></td>
            <td><b>Tipo</b></td>
            </tr>";
            $_SESSION['txt2'];
            $txt3 = "</table>";
            if ($_POST['incluir']=='incluir') {
                $_SESSION['txt2'] = $_SESSION['txt2'] . "<tr>
                    <td>$descricao</td>
                    <td>$valor</td>
                    <td>$tipo</td>
                    </tr>";
            }
                $txt = fopen("tarefas.txt", "w");
                fwrite ($txt, "<table id='table'>
                <tr>
                <td><b>Descrição</b></td>
                <td><b>Valor</b></td>
                <td><b>Tipo</b></td>
                </tr>" . $_SESSION['txt2'] . "</table>");
                fclose($txt);
            $conteudo = file_get_contents('tarefas.txt');
            echo $conteudo;
        ?>
    </div>
</body>
<style>
    body {
        font-family: Arial;
        margin: 0;
        padding: 0;
    }
    h2 {
        margin: 0;
        background-color: lightgreen;
        color: black;
        padding: 10px;
    }
    .corpo {
        margin: 10px;
    }
    button {
        padding: 5px;
        border: 1px solid pink;
        border-radius: 2px;
        background-color: lightgreen;
    }
    input {
        margin: 1px;
        border: 1px solid pink;
        border-radius: 5px;
    }
</style>
</html>
<?php
    }
    else{
        header('Location:login.php');
    }
?>