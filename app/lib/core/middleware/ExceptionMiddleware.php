<?php

use Phalcon\Mvc\Dispatcher as MvcDispatcher;
use Phalcon\Mvc\Dispatcher\Exception as MvcDispatcherException;


class ExceptionMiddleware extends BaseMiddleware
{
    public function __construct($event, $dispatcher) {
        parent::__construct($event, $dispatcher);
    }

    public function execute($application) {
        if (!is_null($this->exception)) {
            $exceptionConfig = require __DIR__ . '/../../../config/config.php';

            if ($this->exception instanceof MvcDispatcherException) {
                $controller = $exceptionConfig['exception']->error404->controller;
                $action = $exceptionConfig['exception']->error404->action;
            }
            else {
                $controller = $exceptionConfig['exception']->error500->controller;
                $action = $exceptionConfig['exception']->error500->action;
            }

            $this->dispatcher->forward(
                array(
                    'controller' => $controller,
                    'action' => $action,
                )
            );
        }

        return false;
    }
}

