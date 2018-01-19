<?php

class Mensagem {

    function __construct() {
        
    }

    static function erros($erros) {
        echo ' <div class="card-panel red lighten-2">
                <span class="text-red mensagem">  ' . $erros . ' </span>
        </div>';
    }

    static function avisos($avisos) {
        echo ' <div class="card-panel green lighten-2">
                <span class="text-green mensagem">  ' . $avisos . ' </span>
        </div>';
    }

    static function alerta($alertas) {
        echo ' <div class="card-panel orange lighten-2">
                <span class="text-orange mensagem">  ' . $alertas . ' </span>
        </div>';
    }

}
