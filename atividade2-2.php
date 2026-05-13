<?php

class Calculadora{

    private $numeroA;
    private $numeroB;

    public function getNumeroA()
    {
        return $this->numeroA;
    }

    public function setNumeroA($numeroA): self
    {
        $this->numeroA = $numeroA;

        return $this;
    }

    public function getNumeroB()
    {
        return $this->numeroB;
    }

    public function setNumeroB($numeroB): self
    {
        $this->numeroB = $numeroB;

        return $this;
    }

    public function calculaSoma(){
        $soma = $this->numeroA + $this->numeroB;
        return $soma;
    }
    public function calculaSubtracao(){
        $sub = $this->numeroA - $this->numeroB;
        return $sub;
    }
    public function calculaMultiplicacao(){
        $mult = $this->numeroA * $this->numeroB;
        return $mult;
    }
    public function calculaDivisao(){
        $div = $this->numeroA / $this->numeroB;
        return $div;
    }
    public function calculaResto(){
        $resto = $this->numeroA % $this->numeroB;
        return $resto;
    }
}

$calculadora = new Calculadora();
$calculadora -> setNumeroA(readline('Diga um número inteiro: '));
$calculadora -> setNumeroB(readline('Diga outro número inteiro: '));

print "Soma: ". $calculadora->calculaSoma(). "\nSubtração: ". $calculadora->calculaSubtracao(). "\nMultiplicação: ". $calculadora->calculaMultiplicacao(). "\nDivisão: ". $calculadora->calculaDivisao(). "\nResto: ". $calculadora->calculaResto(). "\n";
