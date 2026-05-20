<?php

class Cidade
{
    private string $nome;
    private int $populacao;
    private int $area;
    private int $altitude;

    public function getPopulacao(): int
    {
        return $this->populacao;
    }

    public function setPopulacao(int $populacao): self
    {
        $this->populacao = $populacao;

        return $this;
    }

    public function getArea(): int
    {
        return $this->area;
    }

    public function setArea(int $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getAltitude(): int
    {
        return $this->altitude;
    }

    public function setAltitude(int $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function alterarNome($nome) {
        $this->setNome($nome);
    }
    public function alterarPopulacao($populacao) {
        $this->setPopulacao($populacao);
    }
    public function alterarArea($area) {
        $this->setArea($area);
    }
    public function alterarAltitude($altitude) {
        $this->setAltitude($altitude);
    }
}

$cidade = new Cidade();
$cidade->setNome("Qual o nome da sua cidade? ");
$cidade->setPopulacao("Qual a população da sua cidade? ");
$cidade->setArea("Qual a área (km²) da sua cidade? ");
$cidade->setAltitude("Qual a altitude (m) da sua cidade? ");

do {
    print "
        **************************
        *         Cidade         *
        **************************
        * 1- Alterar nome        *
        * 2- Alterar população   *
        * 3- Alterar área        *
        * 4- Alterar altitude    *
        **************************
        * 0- Sair                *
        **************************\n";

    $opcao = readline();
    print "\n\n";

    switch ($opcao) {
        case 1:
            $cidade->alterarNome(readline("Qual será o novo nome da cidade ". $cidade->getNome(). "?"));
            print "Nome alterado com sucesso! agora sua cidade se chama ". $cidade->getNome(). "!\n\n";
            break;
            
        case 2:
            $cidade->alterarPopulacao(readline("Qual será a nova população da cidade ". $cidade->getNome(). "?"));
            print "População alterada com sucesso! agora sua cidade possui ". $cidade->getPopulacao(). " habitantes!\n\n";
            break;

        case 3:
            $cidade->alterarArea(readline("Qual será a nova área da cidade ". $cidade->getNome(). "?"));
            print "Área alterada com sucesso! agora sua cidade possui ". $cidade->getArea(). " km²!\n\n";
            break;

        case 4:
            $cidade->alterarAltitude(readline("Qual será o novo nome da cidade ". $cidade->getNome(). "?"));
            print "Altitude alterada com sucesso! agora sua cidade está à ". $cidade->getAltitude(). " m do nível do mar!\n\n";
            break;

        case 0:
            print "Saindo... \n";
            break;

        default:
            print "Opção inválida... \n\n";
            break;
    }
} while ($opcao != 0);
