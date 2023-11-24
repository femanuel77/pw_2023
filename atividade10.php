<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 9</title>
</head>
<body>
    <h2 align="center">Livro de visitantes</h2>
    <form action="" method="post">
        <label for="">Nome*:</label>
        <input type="text" name="nome" id="nome"><br>
        <label for="">E-mail:*</label>
        <input type="text" name="email" id="email"><br>
        <legend>Mensagem:</legend>
        <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Assinar">
        <input type="reset" value="Limpar">
    </form>
    <?php
        $data = date('d/m/y');
        $nome = @$_POST['nome'];
        $email = @$_POST['email'];
        $mensagem = @$_POST['mensagem'];
        $texto = "<div style='background-color:lightgreen; width: 30%;'><p>Assinado em $data por <a href='".$email."'>$nome</a><br><center><i>$mensagem</i></center></p></div>";
        $arquivo = fopen ("livro.txt", "a");
        fwrite ($arquivo, "$texto\n");
        fclose ($arquivo);
        $conteudo = file_get_contents('livro.txt');
        echo $conteudo;
    ?>
</body>
</html>