<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/9
 * Time: 9:38
 */
namespace Admin\Model;
use Think\Model;


class LableModel extends Model
{
    public function getlables()
    {
        $data=$this->where('l_type<4')->select();
        return $data;
    }



    public function editlable($data)
    {
        $msg=$this->save($data);
        return $msg;
    }


}
