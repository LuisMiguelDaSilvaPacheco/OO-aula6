<?php

class Veiculo{
    private int $capacidade;
    private  int $passagensVendidas;

    public function __construct( int $capacidade)
    {
        $this->setCapacidade($capacidade);
    }

    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function setCapacidade( int $capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }

    public function setPassagensVendidas( int $passagensVendidas): self
    {
        $this->passagensVendidas = $passagensVendidas;

        return $this;
    }

    


}

$veiculo = new Veiculo(200);
do {
    $veiculo->setPassagensVendidas(readline('Quantas passagens você quer comprar? '));
    $veiculo->venderPassagem();
} while ($veiculo->getPassagensVendidas() > 0);