<?php

class CtrlEndereco {

    //Acesso a controle de Banco de Dados
    function salvar(Endereco $endereco) {
        require_once './DAO/EnderecoDAO.php';
        $enderecoDAO = new EnderecoDAO();
        return $enderecoDAO->salvar($endereco);
    }

    function buscar(Endereco $endereco) {
        require_once './DAO/EnderecoDAO.php';
        $enderecoDAO = new EnderecoDAO();
        return $enderecoDAO->buscar($endereco);
    }

    function atualizar(Endereco $endereco) {
        require_once './DAO/EnderecoDAO.php';
        $enderecoDAO = new EnderecoDAO();
        return $enderecoDAO->atualizar($endereco);
    }

}
