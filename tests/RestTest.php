<?php

class RestTest extends TestCase
{
    protected $basePath = 'rest-api-example/public';

    /**
     * Testing GET request.
     *
     * @return void
     */
    public function testGet()
    {
        $this->get("{$this->basePath}/")
            ->seeJson(["message" => "It was a GET request"]);
    }
    
    /**
     * Testing POST request.
     *
     * @return void
     */
    public function testPost()
    {
        $this->post("{$this->basePath}/")
            ->seeJson(["message" => "It was a POST request"]);
    }
}
