<?php

    $carros = [
        'LMS-2232' =>[
            'marca' => 'VW',
            'modelo' => 'Golf'
        ],
        'DIS-4639' =>[
            'marca' => 'Chevrolet',
            'modelo' => 'Onix'
        ],
        'OPN-5612' => [
            'marca' => 'Fiat',
            'modelo' => 'Uno'
        ],
    ];

    foreach($carros as $placa => $carro){
        echo $placa . ': ' . $carro['marca'] . "<br>";
    }

?>