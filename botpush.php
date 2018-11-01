<?php



require "vendor/autoload.php";

$access_token = 'fybwIoIf6IZx9bxwu17v3Um5AruhYai8MMbttBeZD8a+/rIgv05xGAsKlXgq4UQToVKhifapyxUqeTCcwsgp+YJvc2wj427vDfYt6fzfTWAkpbJ62eI3dJs6qTfX+O5OoQJMKhqIJnGzGzsGXjzjtAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '90bee442a61b7eb3b8bccf8f01f34b09';

$pushID = 'Ub358137ef653e469b05224eb48ad6cf2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







