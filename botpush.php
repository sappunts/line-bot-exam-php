<?php



require "vendor/autoload.php";

$access_token = 'BimhhLbwavp2+qhmtD3pNt2qULWM9FA8iyJ92hFbNCK/5CaVvHd+r3S6F3EkexfdiADw3CjStjwFuIbPxcJe68xfUU2VuGbRPQBrh+norxGL9fTMANKSqN/v5j8teLt1wwaCNAW4l5U2QDs+7rfvbwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f7e6e37d0d8411d3fec9356568789b40';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







