<?php
$config = require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/loader.php';
require_once __DIR__ . '/../config/services.php';

$application = new \Phalcon\Mvc\Application($di);

require_once __DIR__ . '/bootstrap/parameters.php';
require_once __DIR__ . '/bootstrap/middleware.php';
require_once __DIR__ . '/bootstrap/routes.php';
echo $application->handle()->getContent();
