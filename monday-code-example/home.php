<?php
require_once('./php-client/vendor/autoload.php');

$env = getenv();

error_log(print_r($env, TRUE));

$name = getenv('NAME', true) ?: 'World';
echo sprintf('Hello from PHP %s!', $name);

