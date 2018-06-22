<?php



require "vendor/autoload.php";

$access_token = 'N5TQzI1NtC+fmg/iUsis2YJOspdayz9hFQjksoEJAfD3rQUfJhLBp9VR8/QKDKK/nhGzOxApCXXCXrbbLdpmn60b42S3CNyZQdnFYZQohKNKo5uivAcjB/1rpY/cFNd3sZ6TYyvep/vr21Rx1rCfgQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'e064377304e4765a1a1b6ab8b11bd277';

$pushID = 'U9376570e7129e8665eb35787fa03d0f8';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







