<?php
/**
 * Created by PhpStorm.
 * User: kix
 * Date: 12/02/15
 * Time: 14:55
 */

namespace AppBundle\Service;

class HelloService
{

    private $helloString;

    public function __construct($helloString = 'Hello Wordpress world!')
    {
        $this->helloString = $helloString;
    }

    public function hello()
    {
        return $this->helloString;
    }

}