<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/8
 * Time: 11:05
 * 父类
 */

namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller
{
  function _initialize()
  {
      if(empty($_SESSION['user']))
      {
          redirect(U('Public/adminlog'));
      }
  }

    public function logout()
    {
        session_unset();
        session_destroy();
        redirect(U('Public/adminlog'));
    }




}