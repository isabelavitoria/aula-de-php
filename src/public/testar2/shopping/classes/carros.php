<?php
class Car {
    public $marca = "";
    public $modelo= "";
    public $cor= "";
    public $placa= "";

    function ligar() {
        echo "O carro está ligado\n";
    }
    function desligar() {
        echo "O carro está desligado\n";
    }
    function acelerar() {
        echo "O carro acelera\n";
    }
}
     $car1 = new Car();
     $car2 = new Car();

     $car1->marca = "Tesla";
     $car1->modelo = "Roadster";
     $car1->placa = "MARTE01";

     $car2->marca = "Volkswagen";
     $car2->modelo = "Fusca";
     $car2->cor = "Azul";
     $car2->placa = "HERBIE53";

     echo $car1->marca;
     echo $car2->marca;

     $car1->desligar();
     $car2->desligar();

     class Pessoa{
        public $nome;
        public $idade;

        function __construct() {
            echo 'Um objeto foi criado <br/>';
        }
        function perfil(){
            echo 'Eu sou' . $this->nome. '<br />';
            echo 'Eu tenho' .$this->idade . 'anos de idade.<br/>';
        }
     }
     $p1 = new Pessoa();
     $p1->nome = 'Maria';
     $p1->idade = 22;
     $p1->perfil();
?>