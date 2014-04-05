<?php
namespace Hari\Contact\Web\Contact;

use Aura\Framework\Web\Controller\AbstractPage;

use Hari\Contact\Web\Forms\ContactForm;

class Page extends AbstractPage
{
    protected $form_factory;
    
    public function preExec()
    {
    }

    public function actionIndex()
    {
        $form = $this->form_factory->newInstance('hari.contact.contactform');        

        if ($this->context->isPost()) {
            $form->fill($_POST);
            if ($form->filter()) {
                // Do what you love
            }
        }

        // set data for view and layout
        $this->data->title = "Contact Us";
        $this->data->form = $form;

        // set the view which should be fetched to render
        $this->view = 'contact';

        // set layout which needs to be rendered
        $this->layout = 'default';
    }

    public function setFormFactory($form_factory)
    {
        $this->form_factory = $form_factory;
    }
}
