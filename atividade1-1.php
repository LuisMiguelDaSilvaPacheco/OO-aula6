<?php

class Pessoa{

    private $nome;
    private $endereco;
    private $cidade;
    private $altura;

    public function retornaApresentacao(){

    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }


    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

$pessoa = new Pessoa();
$pessoa -> setNome(readline('Diga seu nome: '));
$pessoa -> setAltura(readline('Diga sua altura: '));
$pessoa -> setEndereco(readline('Diga seu endereço: '));
$pessoa -> setCidade(readline('Diga sua cidade: '));