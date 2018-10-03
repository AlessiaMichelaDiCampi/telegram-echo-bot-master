<?php

// PARAMETRI DA MODIFICARE
$WEBHOOK_URL = 'https://telegram-echo-bot-master.herokuapp.com/';
$BOT_TOKEN = '663818320:AAE0nGlnEP3pXaE-XfztQ6I_WZHEQOmPyFs';

// NON APPORTARE MODIFICHE NEL CODICE SEGUENTE
$API_URL = 'https://api.telegram.org/bot' . $BOT_TOKEN .'/';
$method = 'setWebhook';
$parameters = array('url' => $WEBHOOK_URL);
$url = $API_URL . $method. '?' . http_build_query($parameters);
$handle = curl_init($url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($handle, CURLOPT_TIMEOUT, 60);
$result = curl_exec($handle);
print_r($result);
