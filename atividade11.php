<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 11</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="elemento" id="elemento">
        <button name="button" value="b1">Adicionar</button>
        <button name="button" value="b2">Deletar</button>
    </form>
    <div>
        <?php
            session_start();
            $elemento = $_POST['elemento'];
            $button = $_POST['button'];
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $_SESSION['array'] = array();
            }
            if (!isset($_SESSION['array'])) {
                $_SESSION['array'] = array();
            }
            function Adicionar($elemento, &$array){
                array_push($array, $elemento);
            }
            function Deletar($elemento, &$array){
                $posicao = array_search($elemento, $array);
                if($posicao !== false){
                    unset($array[$posicao]);
                }
            }
            if($button == "b1"){
                Adicionar($elemento, $_SESSION['array']);
                print_r($_SESSION['array']);
            }
            else if($button == "b2"){
                Deletar($elemento, $_SESSION['array']);
                print_r($_SESSION['array']);
            }
        ?>
    </div>
</body>
</html>
