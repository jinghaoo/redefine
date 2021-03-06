<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
    	 $this->redirect('Index/login');
    }
    public function login(){
     	if(IS_POST){
     		$name  = I('post.user_name');
     		$password =  I('post.user_pass');
     		$model = D('User');
     		$pass = getPwd($password);

     		if($model->checkLogin($name,$pass)){
     			$this->success('登陆成功',U('Main/index'));
     		}else{
     			$this->error('用户名或密码错误',U('Index/login'));
     		}
        }else{
         	$this->display();
        }
    }

    public function loginout(){
        session(null);
        $this->redirect('Index/login');
    }
}
