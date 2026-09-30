<?php

function jogadorController(){
    echo "6. Controller recebeu a requisição.<br>";
    $jogadores = jogadorService();
    echo "8. Controller recebeu os dados do Service.<br>";
    echo "Usuários encontrados:<br>";
    foreach ($jogadores as $jogador) {
        echo "- " . $jogador . "<br>";
    }
}
