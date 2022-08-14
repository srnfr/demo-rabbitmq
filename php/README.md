# PHP code for RabbitMQ tutorials, slightly modified.

Here you can find PHP code examples from [RabbitMQ
tutorials](https://www.rabbitmq.com/getstarted.html).

To successfully use the examples you will need a running RabbitMQ server.

## Requirements

### PHP 7.0+

You need `PHP 7.0` and `php-amqplib`. To get these
dependencies on Ubuntu type:

    sudo apt-get install -y git-core php-cli php-amqplib php-mbstring php-curl 

### RabbitMQ Server
You can start one (on a free tier plan) at [CloudAMQP](https://cloudamqp.com)
Modify the `config.ini file` as needed.

## Code

[Tutorial one: "Hello World!"](https://www.rabbitmq.com/tutorials/tutorial-one-php.html):

    php send.php
    php receive.php


[Tutorial two: Work Queues](https://www.rabbitmq.com/tutorials/tutorial-two-php.html):

    php new_task.php "A very hard task which takes two seconds.."
    php worker.php


[Tutorial three: Publish/Subscribe](https://www.rabbitmq.com/tutorials/tutorial-three-php.html)

    php receive_logs.php
    php emit_log.php "info: This is the log message"

[Tutorial four: Routing](https://www.rabbitmq.com/tutorials/tutorial-four-php.html):

    php receive_logs_direct.php info
    php emit_log_direct.php info "The message"


[Tutorial five: Topics](https://www.rabbitmq.com/tutorials/tutorial-five-php.html):

    php receive_logs_topic.php "*.rabbit"
    php emit_log_topic.php red.rabbit Hello

[Tutorial six: RPC](https://www.rabbitmq.com/tutorials/tutorial-six-php.html):

    php rpc_server.php
    php rpc_client.php
