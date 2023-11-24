<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" value="Acesse o sistema" name="acesso">
    </form>
    <?php
        $texto1 = date('d/m/y, h:m:s;') . " " . getHostByName(getHostName());
        $log = fopen('acesso.txt', 'a');
        fwrite($log, "$texto1<br>");
        fclose($log);
        if (file_exists('acessos.txt')) {
            $acessos = intval(file_get_contents('acessos.txt'));
        } else {
            $acessos = 0;
        }
        if(isset($_POST["acesso"])){
            $acessos++;
            file_put_contents('acessos.txt', $acessos);
            echo "Total de acessos: <b>$acessos</b><br>";
            $conteudo = file_get_contents('acesso.txt');
            echo $conteudo . "<br>";
        }
    ?>
</body>
</html>
