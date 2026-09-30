<?php

function dispatcher($rota){
    echo "5. Dispatcher decidiu qual controller deve executar.<br>";
    if ($rota === "/jogadores") {
        jogadorController();
    }else if ($rota === "/times") {
        timesController();
    } else {
        echo "Rota não encontrada.<br>";
    }
}