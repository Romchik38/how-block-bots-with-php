<?php

$agents = $_SERVER['HTTP_USER_AGENT'];

$botNames = require_once __DIR__ . '/bots.php';

foreach ($botNames as $botName) {
    if (strpos($agents, $botName) !== false) {
        echo '403 Forbiden. Please contact via mails published on the site';
        http_response_code(403);
        exit();
    }
}

