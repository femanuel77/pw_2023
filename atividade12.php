<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Calculadora de impostos e taxas</h2>
    <form action="" method="post">
        <label for="imposto">Imposto(%):</label>
        <input type="text" name="imposto" id="imposto"><p>
        <label for="taxa">Taxa de serviço(%):</label>
        <input type="text" name="taxa" id="taxa"><p>    
        <label for="preço">Preço do combustível (R$):</label>
        <input type="text" name="preço" id="preço"><p>
        <button type="submit" name="calcular" value="calcular">Calcular</button>
    </form>
    <div class="resultado">
        <?php
            session_start();
            @$_SESSION['imposto'] = intval($_POST['imposto']);
            @$_SESSION['taxa'] = intval($_POST['taxa']);
            @$_SESSION['preço'] = intval($_POST['preço']);
            if ($_POST['calcular']=="calcular") {   
                $_SESSION['preço'] +=  (($_SESSION['taxa'] + $_SESSION['imposto'])/100) * $_SESSION['preço'];
                echo "Imposto: R$" . ($_SESSION['imposto']/100) . "<br>";
                echo "Taxa de serviço: R$" . ($_SESSION['taxa']/100) . "<br>";
                echo "Total: R$" . $_SESSION['preço'];
            }
        ?>
    </div>
</body>
</html>