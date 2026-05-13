<?php

class Carro{

    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velocidadeMax;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao($anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }

    public function setVelocidadeMax($velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }

    public function dados(){
        $dados = $this->modelo. "-". $this->marca. ", fabricado em ". $this->anoFabricacao. ", com velocidade máxima de ". $this->velocidadeMax. "Km/h\n";
    
        return $dados;
    }
    
}

$carro1 = new Carro();
$carro1 -> setModelo(readline('Diga o modelo do seu carro: '));
$carro1 -> setMarca(readline('Diga a marca do seu carro: '));
$carro1 -> setAnoFabricacao(readline('Diga o ano de fabricação do seu carro: '));
$carro1 -> setVelocidadeMax(readline('Diga a velocidade do seu carro: '));

$carro2 = new Carro();
$carro2 -> setModelo(readline('Diga o modelo do seu carro: '));
$carro2 -> setMarca(readline('Diga a marca do seu carro: '));
$carro2 -> setAnoFabricacao(readline('Diga o ano de fabricação do seu carro: '));
$carro2 -> setVelocidadeMax(readline('Diga a velocidade do seu carro: '));

$carro3 = new Carro();
$carro3 -> setModelo(readline('Diga o modelo do seu carro: '));
$carro3 -> setMarca(readline('Diga a marca do seu carro: '));
$carro3 -> setAnoFabricacao(readline('Diga o ano de fabricação do seu carro: '));
$carro3 -> setVelocidadeMax(readline('Diga a velocidade do seu carro: '));

$carroMaisRapido = $carro1;
$carroMaisLento = $carro1;

// código carro mais rápido

if ($carroMaisRapido->getVelocidadeMax() < $carro2->getVelocidadeMax()) {
    $carroMaisRapido = $carro2;
}
if ($carroMaisRapido->getVelocidadeMax() < $carro3->getVelocidadeMax()) {
    $carroMaisRapido = $carro3;
}

// código carro mais lento
if ($carroMaisLento->getVelocidadeMax() > $carro2->getVelocidadeMax()) {
    $carroMaisLento = $carro2;
}
if ($carroMaisLento->getVelocidadeMax() > $carro3->getVelocidadeMax()) {
    $carroMaisLento = $carro3;
}

print "O carro mais rápido é: ". $carroMaisRapido->dados();
print "O carro mais lento é: ". $carroMaisLento->dados();