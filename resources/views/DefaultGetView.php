<?php

namespace Resources\Views;

class DefaultGetView
{
    public $message = 'It was a GET request';
    public $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }
}
