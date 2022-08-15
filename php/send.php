<?php

require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$ini = parse_ini_file('config.ini');

$connection = new AMQPStreamConnection($ini['server'], $ini['port'], $ini['username'], $ini['password'], $ini['vhost']);
$channel = $connection->channel();

$channel->queue_declare('hello', false, false, false, false);

for ($i = 0; $i < 10; $i++) {
    $txt= "Hello World! $i";
    $msg = new AMQPMessage($txt);
    $channel->basic_publish($msg, '', 'hello');
    echo " [x] Sent $txt \n";
}

$channel->close();
$connection->close();
?>
