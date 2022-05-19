<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret
]);

$response = $client->isolatedMarginTransferHistory('BNBUSDT',
    [
        'asset' => 'BNB',
        'transFrom' => 'SPOT',
        'transTo' => 'ISOLATED_MARGIN',
        'current' => 1,
        'size' => 100,
        'recvWindow' => 5000
    ]
);

echo json_encode($response);
