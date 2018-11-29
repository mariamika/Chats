<?php

require "vendor/autoload.php";

$server = \Ratchet\Server\IoServer::factory(
    new \Ratchet\Http\HttpServer(
        new \Ratchet\WebSocket\WsServer(
            new \app\Chat()
        )
    ),
    8080
);

$server->run();