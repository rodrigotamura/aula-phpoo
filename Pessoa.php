<?php
class Pessoa
{

    public $nome;
    public $idade;

    public function correr($km)
    {

        echo $this->nome." correu!";
        for($i = 1; $i <= $km; $i++){
            echo ".";
        }
        echo $this->nome." terminou de correr";

    }

}

$pessoa = new Pessoa();
$pessoa->nome = "Rodrigo";
$pessoa->idade = 29;

$pessoa2 = new Pessoa();
$pessoa2->nome = "Debora";
$pessoa2->idade = 30;

echo $pessoa->correr(50);