<?php
namespace Hari\Contact\Web\Contact;

use Aura\Framework\Web\AbstractPage;
use Hari\Contact\Web\Forms\ContactForm;

class Page extends AbstractPage
{
    public function preExec()
    {
    }

    public function actionIndex()
    {
        $this->view->setInnerView('contact');
        $form = new ContactForm();
        $form->setAction('/contact')
             ->setMethod('post')
             ->setAttrib('class', 'form-horizontal');
        $form->setView(new \Zend_View());
        if ($this->context->isPost()) {
            if (!$form->isValid($_POST)) {
            }
        }
        $this->data->form = $form;
    }
}
