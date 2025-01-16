<?php

require __DIR__.'/vendor/autoload.php';
use Telegram\Bot\Api;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

function sendNotification(string $email) {
    $telegram = new Api($_ENV['BOT_TOKEN']);
    $response = $telegram->sendMessage([
        'chat_id' => $_ENV['CHAT_ID'],
        'text' => $email . ' has just opened your email'
    ]);
}

$email = isset($_GET['email']) ? $_GET['email'] : 'Unknown recipient';
 
sendNotification($email);

header('Content-Type: image/png');
readfile('pixel.png');
