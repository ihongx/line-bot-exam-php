<?php



require "vendor/autoload.php";

$access_token = 'DaAmHf3gmqLcXArw/auWWbwU1imSNTkQJTNiQgo1Yvr05USUdvMO0jwAknQLnYRf08s+QkeED0PmcPGnoTbb9dwRUH8mhqHGr8AoYiIqRGLAZCjoGjzPptw0QUDKfUyPTEsJwMAs5goXWBo5zQ0CJgdB04t89/1O/w1cDnyilFU=';
$channelSecret = '1e255bbc06356099d6e059528184b147';

$pushID = 'Cd61a94be92121c3a6c0f630a3e0ed546';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







