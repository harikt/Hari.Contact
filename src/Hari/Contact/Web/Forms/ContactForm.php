<?php
namespace Hari\Contact\Web\Forms;

use \Zend_Form;

class ContactForm extends Zend_Form
{
    public function init()
    {
        $username = new \Zend_Form_Element_Text('username');
        $username->addValidator(new \Zend_Validate_Alnum())
            ->setLabel('Name')
            ->setRequired(true);

        $email = new \Zend_Form_Element_Text('email');
        $email->addValidator(new \Zend_Validate_EmailAddress())
            ->setLabel('Email')
            ->setRequired(true);

        $message = new \Zend_Form_Element_Textarea('message');
        $message->addValidator(new \Zend_Validate_Alnum())
            ->setLabel('Message')
            ->setRequired(true)
            ->setAttribs(['rows' => 5, 'cols' => 10]);
        
        $this->addElements( array($username, $email, $message ) )
            ->addElement('submit', 'send', array('label' => 'Send'));
    }
}