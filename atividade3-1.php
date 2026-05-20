<?php

class Veiculo{
    private int $capacidade;
    private int $passagensVendidas;

    public function __construct( int $capacidade)
    {
        $this->setCapacidade($capacidade);
        $this->setPassagensVendidas(0);

        return $this->capacidade;
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

    public function venderPassagem(int $passagens)
    {

        if ($this->capacidade >= $passagens) {
            $this->capacidade -= $passagens;
            return true;
        }
        return false;
    }
}

$veiculo = new Veiculo(readline("Qual a capacidade inicial do veiculo? "));

do {

    $passagens = 'Quantas passagens você quer comprar? ';

    if ($veiculo->venderPassagem(readline($passagens))) {
        print "Passagens compradas com sucesso!\n\n";
    } else {
        print "A quantidade de passagens que você deseja comprar excede a disponivel (". $veiculo->getCapacidade(). "), tente novamente.\n\n";
    }
    
} while ($passagens > 0 && $veiculo->getCapacidade() > 0);

print "Finalizando...";
sleep(5);
system("clear");
