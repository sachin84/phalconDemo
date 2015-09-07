<?php
use Phalcon\DI;
use Phalcon\DI\FactoryDefault;

set_include_path(__DIR__ . '/' . get_include_path());

// use the application autoloader to autoload the classes
// autoload the dependencies found in composer
include __DIR__ . '/../vendor/autoload.php';


$di = new FactoryDefault();
DI::reset();

// add any needed services to the DI here
DI::setDefault($di);
