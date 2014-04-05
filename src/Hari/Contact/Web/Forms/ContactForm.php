<?php
namespace Hari\Contact\Web\Forms;

use Aura\Input\Form;

class ContactForm extends Form
{
    public function init()
    {
        $options = $this->getOptions();
        $states  = $options->getStates();
             
        $this->setField('name')
            ->setAttribs([
                'id' => 'name',
                'size' => 20,
                'maxlength' => 20,
            ]);
        $this->setField('email')
            ->setAttribs([
                'size' => 20,
                'maxlength' => 20,
            ]);
        $this->setField('url')
            ->setAttribs([
                'size' => 20,
                'maxlength' => 20,
            ]);
        $this->setField('message', 'textarea')
            ->setAttribs([
                'cols' => 40,
                'rows' => 5,
            ]);
            
        $this->setField('cbarray', 'radios')
            ->setAttribs(
                [
                    'name' => 'cbarray[]',                
                ]
            )
            ->setOptions(
                [
                    'baz' => 'dib',
                    'foo' => 'bar'
                ]
            )->setValue('baz');
        
        $this->setField('check', 'checkbox')
            ->setAttribs(
                [
                    'name' => 'cbarray[]', 
                    'type' => 'repeat'
                ]
            )
            ->setOptions(array('baz' => 'dib', 'foo' => 'bar'))
            ->setValue(array('baz' => 'dib', 'foo' => 'bar'));
        
        $this->setField('state', 'select')
                 ->setOptions($states);
        
        $this->setField('submit', 'submit')
            ->setAttribs(['value' => 'send']);

        $filter = $this->getFilter();

        $filter->addSoftRule('name', $filter::IS, 'string');
        $filter->addSoftRule('name', $filter::IS, 'strlenMin', 4);
        $filter->addSoftRule('email', $filter::IS, 'email');
        $filter->addSoftRule('url', $filter::IS, 'url');
        $filter->addSoftRule('message', $filter::IS, 'string');
        $filter->addSoftRule('message', $filter::IS, 'strlenMin', 6);
        $filter->addSoftRule('state', $filter::IS, 'inKeys', $states);
    }
}
