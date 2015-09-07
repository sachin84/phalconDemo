<?php

abstract class BaseMiddleware
{
    protected $event;
    protected $dispatcher;

    public function __construct($event, $dispatcher) {
        $this->event = $event;
        $this->dispatcher = $dispatcher;
    }

    public function setException($exception) {
        $this->exception = $exception;
    }

    abstract public function execute($application);
}

