<?php

class Conecta {

    private static $instance;

    public static function getConection() {
        try {
            if (!isset(self::$instance)) {
                self::$instance = new PDO("mysql:host=127.0.0.1;dbname=soa", "root", "12345", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            }
        } catch (PDOException $erro) {
            throw new PDOException("Erro ao conectar: " . $erro);
        } catch (Exception $erro) {
            throw new Exception("Erro ao executar o programa: " . $erro);
        }
        return self::$instance;
    }

    public static function prepare($sql) {
        return self::getConection()->prepare($sql);
    }

    public static function close() {
        self::$instance = null;
    }

}
