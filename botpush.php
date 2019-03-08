<?php



require "vendor/autoload.php";

$access_token = '7UrEo7mB6P+Z9dB7S8yNJGOXh6siNQixgdgALVb888pVt2FjYL6p3ElUA4M4sDceWuTTCovcNLcyiN1jLt5MRm/q7d7k2jpMOn18yrzUx5GAPsrRu86DSasMYG+xKTzl8wti3EOzb+2+jscFoWtYiQdB04t89/1O/w1cDnyilFU=';
$channelSecret = '3087edeebd9f98b62662aaffd692ba5e';

$pushID = 'Cd61a94be92121c3a6c0f630a3e0ed546';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







