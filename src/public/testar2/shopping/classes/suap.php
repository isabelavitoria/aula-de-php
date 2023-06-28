<?php
class Usuario {
    private $_nome;
    private $_idade;

    function __construct($nome, $idade) {
        $this->setNome($nome);
        $this->setIdade($idade);
        echo 'Novo usuário criado. <br />';
    }

    function getNome() {
        return $this->_nome;
    }

    function setNome($value) {
        if ($value != "")
            $this->_nome = $value;
        else
        throw new Exception ('O nome é obrigatório.');
    }
    function getIdade() {
        return $this->_idade;
    }
    function setIdade($value) {
        if ($value > 0)
            $this->_idade = $value;
        else
            throw new Exception ('Idade tem que ser maior que zero.');
        }
}
class Professor extends Usuario {
    private $_salario;

    function __construct($nome, $idade, $salario){
        parent::__construct($nome, $idade);
        $this->setSalario($salario);
        echo 'Novo professor criado. <br />';

    }
    function getSalario() {
        return $this->_salario;
    }
    function setSalario($value){
        if ($value >= 0)
            $this->_salario = $value;
        else
        throw new Exception ('Salário não pode ser negativo');
    }
}
class Estudante extends Usuario{
    private $_notas = [];

function __construct($nome, $idade, $notas){
    parent::__construct ($nome, $idade);
    $this->setNotas($notas);
    echo 'Novo estudante criado. <br />';
}

function getNotas() {
    return $this->_notas;
}

function setNotas($values){
    $negativo_encontrado = false;
    foreach ($values as $k => $v){
        if ($v < 0)
            $negativo_encontrado = true;
    }
    if (!$negativo_encontrado)
        $this->_notas = $values;
    else
        throw new Exception ('Notas não podem ser negativos');
}
}

$professor1 = new Professor('João', 30, 3500);
$professor2 = new Professor('Maria', 50, 4000);
$estudante = new Estudante('Ana', 14, [70, 85, 62]);
$estudante2 = new Estudante('Rodrigo', 13, [72, 67, 84]);
echo 'Professor:' . $professor1->getNome() . ', ';
echo $professor1->getIdade() . 'anos, Salário: R$ ';
echo $professor1->getSalario(). '<br />';
echo 'Estudante: ' . $estudante2->getNome() . ', ';
echo $estudante2->getIdade() . ' anos <br />';
echo 'Notas: <br />';
foreach ($estudante2->getNotas() as $k => $notas) {
    echo $notas. '<br />';


}