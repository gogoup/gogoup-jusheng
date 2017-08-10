<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/9
 * Time: 17:38
 */

namespace Admin\Model;
use Think\Model;

class BannerModel extends Model
{
    public function getbanners($group='1')
    {
      return  $this->where('b_group='.$group)->select();
    }



}