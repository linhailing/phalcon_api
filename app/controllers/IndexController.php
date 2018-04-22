<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        echo "<pre>";
        var_dump($this->request);
    }
    public function testAction(){
        return 'ddd';
    }
    public function showAction(){
        return 'dd1111';
    }

}

