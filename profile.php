<?php


$access_token = '7UrEo7mB6P+Z9dB7S8yNJGOXh6siNQixgdgALVb888pVt2FjYL6p3ElUA4M4sDceWuTTCovcNLcyiN1jLt5MRm/q7d7k2jpMOn18yrzUx5GAPsrRu86DSasMYG+xKTzl8wti3EOzb+2+jscFoWtYiQdB04t89/1O/w1cDnyilFU=';

$userId = 'U9376570e7129e8665eb35787fa03d0f8';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

