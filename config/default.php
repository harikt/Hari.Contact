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

$di->params['Hari\Contact\FormFactory'] = [
    // a map of form names to form factories
    'map' => [
        'hari.contact.contactform' => $di->newFactory('Hari\Contact\Web\Forms\ContactForm'),
    ],
];

$di->set('form_factory', $di->lazyNew('Hari\Contact\FormFactory'));

$di->setter['Hari\Contact\Web\Contact\Page']['setFormFactory'] = $di->lazyGet('form_factory');
