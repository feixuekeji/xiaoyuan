<?php
namespace Home\Controller;

use Think\Cache\Driver\Memcache;
use Think\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $this->display();
    }
    
    public function login()
    {
        $data = I('get.');
        //$data['password'] = md5($data['password']);
        $admin = M('admin')->where($data)->find();
        if (!empty($admin)){
            session('admin',$admin['username']);
            redirect(U('Admin/admin','',false,true));
        }else {
            $this->error('用户名或密码有误','index',1);
        }
    }
    
    /**
     * 
     */
    public function logout()
    {
        session('admin',null);
        redirect(U('Admin/index','',false,true));
    }
    
    public function delete()
    {
        $id = I("get.find_id")?("get.find_id"):("get.lost_id");
        $type = I('get.type');
        if($type == "F"){
            $find = M('find');
            $find -> where(array('find_id' => $id)) -> delete();
            return true;
        }
        if ($type == "L"){
            $lost = M('lost');
            $lost -> where(array('lost_id' => $id)) -> delete();
            return true;
        }
    }


    /**
     *
     */
    public function notice()
    {
        $notice = M('notice');
        $data = $notice ->select();
        $this -> assign('data',$data);
    }

    public function addNotice()
    {
        $notice = M('notice');
        $data = I('post.');
        $data['pub_time'] = time();
        if($notice -> add($data)){
            echo "发布成功";
        }else
            echo "发布失败";
    }

    public function deleteNotice()
    {
        $id = I('get.id');
        $notice = M('notice');
        $notice -> where(array('notice_id' => $id)) ->delete();
    }



    
}
?>