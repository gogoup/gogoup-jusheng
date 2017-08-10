<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/8
 * Time: 14:41
 */
namespace Admin\Controller;
use Think\Controller;

class PublicController extends Controller
{
    private $User;

    function _initialize()
    {
        $this->User=D('User');
    }


    public function adminlog()
    {
        layout(false);
        $this->display();
    }

    public function signin()
    {
        $where['user_name']=$_POST['username'];
        $where['user_pwd']='jusheng'.md5($_POST['password']);
        $user_IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
        $user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
        $msg=$this->User->getuser($where);
        if($msg)
        {
            $data['user_id']=$msg['user_id'];
            $data['user_time']=$msg['user_time']+1;
            $data['last_ip']=$user_IP;
            $data['last_time']=date('Y-m-d H:i:s');
            $this->User->save($data);
            $_SESSION['user']=$msg;
            redirect(U('Index/index'));
        }else{
            redirect(U('Public/adminlog'),2,'账号和密码不匹配');
        }


    }



}