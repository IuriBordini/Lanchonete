<?php

class Endereco {

    private $cep;
    private $logradouro;
    private $bairro;
    private $cidade;
    private $uf;

    public function __construct() {
        
    }

    public function getCep() {
        return $this->cep;
    }

    public function getLogradouro() {
        return $this->logradouro;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getUf() {
        return $this->uf;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }

    public function dados() {
        $erros = "";
        if ($this->cep == "") {
            $erros .= "CEP em branco.<br>";
        }
        if ($this->logradouro == "") {
            $erros .= "Endereço em branco.<br>";
        }
        if ($this->bairro == "") {
            $erros .= "Bairro em branco.<br>";
        }
        if ($this->cidade == "") {
            $erros .= "Cidade em branco.<br>";
        }
        if ($this->uf == "") {
            $erros .= "Estado em branco.<br>";
        }
        return $erros;
    }

    public function validar() {
        $erros = $this->dados();
        if ($erros != "") {
            throw new Exception($erros);
        }
    }

}
