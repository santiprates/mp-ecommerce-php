<?php 
require 'vendor/autoload.php';

$access_token = 'APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398'; 

MercadoPago\SDK::setAccessToken($access_token);

$response = @file_get_contents('php://input');
$data = json_decode($response);

file_put_contents('notifications/'.$data->id.'.json', $response);

switch($data->type){
    case 'payment':
        $payment = MercadoPago\Payment::find_by_id($data->data->id);
        http_response_code(201);
        var_dump($payment);
        break;
    case 'test':
        echo 'TEST OK';
        break;
    case 'invoice':
        $invoice = MercadoPago\Invoice::find_by_id($_POST['id']);
        
}

?>