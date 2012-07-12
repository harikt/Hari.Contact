<?php
$loader->add('Hari\Contact\\', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src');

// set up a simple "hello world" routing
$di->get('router_map')->add('contact', '/contact', [
    'values' => [
        'controller' => 'contact',
        'action' => 'index',
    ],
]);

$di->params['Aura\Framework\Web\Controller\Factory']['map']['contact'] = 'Hari\Contact\Web\Contact\Page';