<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/8
 * Time: 14:59
 * user
 */
namespace Admin\Model;
use Think\Model;


class UserModel extends Model
{

    public function getuser($data)
    {
       $msg=$this->where($data)->find();
        return $msg;
    }



}