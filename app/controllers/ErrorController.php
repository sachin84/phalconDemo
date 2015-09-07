<?php

class ErrorController extends ControllerBase
{
    public function error404Action() {
        $this->response->setStatusCode(404, 'Page Not Found');
    }

    public function error500Action() {
        $this->response->setStatusCode(500, 'Internal Server Error');
    }
}
