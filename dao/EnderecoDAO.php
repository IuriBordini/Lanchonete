<?php

require_once 'Conecta.php';

class EnderecoDAO extends Conecta {

    public function salvar(Endereco $endereco) {
        try {
            self::getConection();
            $sql = "insert into endereco (cep, logradouro, bairro, cidade, uf) values "
                    . "(:cep, :logradouro, :bairro, :cidade, :uf)";
            $stmn = self::prepare($sql);
            $stmn->bindValue(":cep", $endereco->getCep());
            $stmn->bindValue(":logradouro", $endereco->getLogradouro());
            $stmn->bindValue(":bairro", $endereco->getBairro());
            $stmn->bindValue(":cidade", $endereco->getCidade());
            $stmn->bindValue(":uf", $endereco->getUf());
            $stmn->execute();
        } catch (PDOException $erro) {
            throw new PDOException("Erro ao salvar o endereco:" . $erro);
        } finally {
            self::close();
        }
    }

    public function atualizar(Endereco $endereco) {
        try {
            self::getConection();
            $sql = "UPDATE endereco SET logradouro = :logradouro, bairro = :bairro, cidade = :cidade, uf = :uf WHERE cep = :cep ";
            $stmn = self::prepare($sql);
            $stmn->bindValue(":cep", $endereco->getCep());
            $stmn->bindValue(":logradouro", $endereco->getLogradouro());
            $stmn->bindValue(":bairro", $endereco->getBairro());
            $stmn->bindValue(":cidade", $endereco->getCidade());
            $stmn->bindValue(":uf", $endereco->getUf());
            $stmn->execute();
        } catch (PDOException $erro) {
            throw new PDOException("Erro ao atualizar o endereco:" . $erro);
        } finally {
            self::close();
        }
    }

    public function buscar($cep) {
        try {
            self::getConection();
            $sql = "select * from endereco where cep = ?";
            $stmn = self::prepare($sql);
            $stmn->bindParam(1, $cep);
            $stmn->execute();
            return $stmn->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $erro) {
            throw new PDOException("Erro ao buscar o endereco:" . $erro);
        } finally {
            self::close();
        }
    }

    function apagar($cep) {
        try {
            self::getConection();
            $sql = "delete from endereco where cep = ?";
            $stmn = self::prepare($sql);
            $stmn->bindParam(1, $cep);
            $stmn->execute();
            self::close();
        } catch (PDOException $erro) {
            throw new PDOException("Erro ao apagar o endereco:" . $erro);
        } finally {
            self::close();
        }
    }

}
