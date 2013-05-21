<?php
namespace Hari\Contact\Web\Contact;

use Aura\Framework\Web\Controller\AbstractPage;

use Hari\Contact\Web\Forms\ContactForm;

class Page extends AbstractPage
{
    protected $contactForm;
    public function preExec()
    {
    }

    public function actionIndex()
    {
        $form = $this->contactForm;
        $form->fill($_POST);

        if ($this->context->isPost()) {
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

    public function setContactForm($form)
    {
        $this->contactForm = $form;
    }
}
