<?php

function timesController(){
    echo "6. Controller recebeu a requisição.<br>";
    $times = timesService();
    echo "8. Controller recebeu os dados do Service.<br>";
    echo "Times encontrados:<br>";
    foreach ($times as $time) {
        echo "- " . $time . "<br>";
    }
}
