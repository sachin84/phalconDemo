<?php

use Phalcon\Dispatcher;
use Phalcon\Mvc\Dispatcher as MvcDispatcher;
use Phalcon\Events\Manager as EventsManager;


$eventsManager = $di->getShared('eventsManager');

$di->set('dispatcher', function() use ($application, $eventsManager) {
    $middlewareConfig = require_once __DIR__ . '/../../config/middleware.php';

    foreach ($middlewareConfig as $eventGenerator => $eventInfo) {
        foreach ($eventInfo as $eventName => $middlewares) {
            foreach ($middlewares as $middlewareName) {
                $eventType = "$eventGenerator:$eventName";

                $eventsManager->attach($eventType, function ($event, $dispatcher, $exception) use ($application, $middlewareName) {
                    $middleware = new $middlewareName($event, $dispatcher);

                    if (!is_null($exception)) {
                        $middleware->setException($exception);
                    }

                    return $middleware->execute($application);
                });
            }
        }
    }

    $dispatcher = new MvcDispatcher();
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;
});

