<?php


$access_token = 'DaAmHf3gmqLcXArw/auWWbwU1imSNTkQJTNiQgo1Yvr05USUdvMO0jwAknQLnYRf08s+QkeED0PmcPGnoTbb9dwRUH8mhqHGr8AoYiIqRGLAZCjoGjzPptw0QUDKfUyPTEsJwMAs5goXWBo5zQ0CJgdB04t89/1O/w1cDnyilFU=';

$userId = 'U926c52ab6fb6ba95cacff48d28b6d8da';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

