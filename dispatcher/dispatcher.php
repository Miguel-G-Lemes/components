<?php

function dispatcher($rota){
    echo "5. Dispatcher decidiu qual controller deve executar.<br>";
    if ($rota === "/jogadores") {
        jogadorController();
    }
}