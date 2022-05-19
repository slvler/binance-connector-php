<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->marginRepayRecord('BTC',
    [
        'txId' => 2970933056,
        'current' => 1,
        'size' => 100,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
