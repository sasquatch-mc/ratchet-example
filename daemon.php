<?php
require __DIR__ . '/vendor/autoload.php';

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
$server = IoServer::factory(
	new HttpServer(new WsServer(
		new App\Handler())
	), 8123);
$server->run();
