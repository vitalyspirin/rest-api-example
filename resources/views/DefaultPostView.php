<?php

namespace Resources\Views;

class DefaultPostView
{
    public $message = 'It was a POST request';
    public $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }
}
