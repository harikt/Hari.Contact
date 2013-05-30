<?php
namespace Hari\Contact;

class FormFactory
{
    protected $map = [];

    public function __construct($map = [])
    {
        $this->map = $map;
    }
    
    public function newInstance($name)
    {
        if (! array_key_exists($name, $this->map)) {
            throw new \Exception("No form with the name found");
        }
        $factory = $this->map[$name];
        $form = $factory();
        return $form;
    }
}
