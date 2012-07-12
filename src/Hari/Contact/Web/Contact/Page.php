<?php
namespace Hari\Contact\Web\Contact;

use Aura\Framework\Web\Controller\AbstractPage;

use Hari\Contact\Web\Forms\ContactForm;

class Page extends AbstractPage
{
    public function preExec()
    {
    }

    public function actionIndex()
    {
        // currently using zend framework 1 form, will modify later
        $form = new ContactForm();
        $form->setAction('/contact')
             ->setMethod('post')
             ->setAttrib('class', 'form-horizontal');
        $form->setView(new \Zend_View());
        if ($this->context->isPost()) {
            if (!$form->isValid($_POST)) {
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
}
