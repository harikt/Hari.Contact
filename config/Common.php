<?php
namespace Hari\Contact\_Config;

use Aura\Di\Container;
use Aura\Di\Config;

class Common extends Config
{
    public function define(Container $di)
    {
        $di->params['Aura\Input\FormFactory']['map']['hari.contact.contactform'] = $di->lazyNew('Hari\Contact\Input\ContactForm');
        $di->setter['Hari\Contact\Web\ContactController']['setFormFactory'] = $di->lazyGet('input_form_factory');
        $di->setter['Hari\Contact\Web\ContactController']['setRenderer'] = $di->lazyNew('Aura\View\TwoStep');
    }

    public function modify(Container $di)
    {
        $router = $di->get('web_router');
        $router->add('contact', '/contact')
            ->setValues([
                'controller' => 'contact',
                'action' => 'actionIndex',
        ]);
        $dispatcher = $di->get('web_dispatcher');
        $dispatcher->setObject(
            'contact',
            $di->lazyNew('Hari\Contact\Web\ContactController')
        );
    }
}
