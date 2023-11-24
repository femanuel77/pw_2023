<?php
    class Carro{
        public $modelo;
        public $ano;
        public $marca;
    }
    $uno = new Carro();
    $uno->modelo = "Uno";
    $uno->ano = "2023";
    $uno->marca = "Fiat";
    print_r($uno);
    echo "<p>";

    class Cliente {
        public $nome;
        public $celular;
        public $email;
        public $cpf;
    }
    $pedro = new Cliente();
    $pedro->nome = "Pedro Santos";
    $pedro->celular = 912345678;
    $pedro->email = "pedrosantos@gmail.com";
    $pedro->cpf = 12345678900;
    print_r($pedro);
?>