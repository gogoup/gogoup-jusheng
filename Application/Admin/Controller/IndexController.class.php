<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends BaseController
{
    function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
    }

    public function index(){
        $this->display();
    }
}