<?php

return new \Phalcon\Config(array(
    'application' => array(
        'controllersDir' => __DIR__ . '/../../app/controllers/',
        'modelsDir'      => __DIR__ . '/../../app/models/',
        'viewsDir'       => __DIR__ . '/../../app/views/',
        'libraryDir'     => __DIR__ . '/../../app/lib/',
        'cacheDir'       => __DIR__ . '/../../app/cache/',
        'baseUri'        => '/phalcon1/',
    ),
    'exception' => array(
        'error404' => array('controller' => 'error', 'action' => 'error404'),
        'error500' => array('controller' => 'error', 'action' => 'error500')
    )
));
