<?php
namespace Hari\Contact\Web;

use Aura\Web_Kernel\AbstractController;

use Hari\Contact\Input\ContactForm;

class ContactController extends AbstractController
{
    protected $form_factory;

    public function actionIndex()
    {        
        $form = $this->form_factory->newInstance('hari.contact.contactform');
        if ($this->request->method->isPost()) {
            $form->fill($_POST);
            if ($form->filter()) {
                // Do what you love
            }
        }
        $data = array(
            'title' => "Contact Us",
            'form' => $form
        );
        $this->renderer->setData($data);
        $this->renderer->setInnerPaths(array(__DIR__ . '/views'));
        $this->renderer->setOuterPaths(array(__DIR__ . '/layouts'));
        $this->renderer->setInnerView('contact');
        $this->renderer->setOuterView('default');
        $this->response->content->set($this->renderer->render());
    }

    public function setFormFactory($form_factory)
    {
        $this->form_factory = $form_factory;
    }
    
    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;
    }
}
