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

$di->params['Aura\Input\FormFactory']['map'] = [
    // a map of form names to form factories
    'hari.contact.contactform' => $di->newFactory('Hari\Contact\Web\Forms\ContactForm')
];

$di->setter['Hari\Contact\Web\Contact\Page']['setFormFactory'] = $di->lazyGet('input_form_factory');

$di->set('contact_options', function () use ($di) {
    return $di->newInstance('Hari\Contact\Web\Forms\Options');
});

$di->params['Hari\Contact\Web\Forms\ContactForm']['options'] = $di->lazyGet('contact_options');
