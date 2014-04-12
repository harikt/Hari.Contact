<?php
namespace Hari\Contact\_Config;

use Aura\Di\Container;
use Aura\Di\Config;

class Common extends Config
{
    public function define(Container $di)
    {
        $di->setter['Hari\Contact\Web\ContactController']['setFormFactory'] = $di->lazyGet('input_form_factory');
    }

    public function modify(Container $di)
    {
        $router = $di->get('web_router');
        $router->add('contact', '/contact')
            ->setValues([
                'controller' => 'contact',
                'action' => 'index',
        ]);
        $dispatcher = $di->get('web_dispatcher');
        $dispatcher->setObject(
            'contact',
            $di->lazyNew('Hari\Contact\Web\ContactController')
        );
    }
}
