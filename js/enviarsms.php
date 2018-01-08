<?php
require 'vendor/autoload.php';
use Plivo\RestClient;


$client = new RestClient("MAZWNJNWFMMMUYMGM0YT", "Nzc0YTU2MzNlZDQzYWJiOTQxMWExN2Y2N2U3NDY1");


$message_created = $client->messages->create(
    '+51977692102',
    ['+51977692108'],
    'Hola Jimmy, correo de prueba desde la Web, Atte, Carlitos'
);