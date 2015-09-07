<?php

$parameters = require_once __DIR__ . '/../../config/parameters.php';
$di->set('parameters', new \Phalcon\Config($parameters));
