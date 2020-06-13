<?php
namespace app\admin\controller;
use think\Controller;
class Login extends Controller
{
    public function login()
    {
			if(Request()->isPost()){
				$data=[
					'username'=>input('username'),
					'password'=>input('password'),	
					'code'=>input('code'),
				];
						
				$admin=db('admin')->where('username','=',$data['username'])->where('password','=',$data['password'])->find();
				session('username',$admin['username']);
				session('id',$admin['id']); 
			  
				
				$captcha = new \think\captcha\Captcha();
				
				if(!$captcha->check($data['code']) ){
					
					return $this->error('验证码错误');
					
				}elseif($admin){
					return $this->success('登录成功','Index/index');
						
				}else{				
					return $this->error('登录失败');					
				}			
			}
			
			
		  return $this->fetch();
    }
		
		
		public function logout()
		{
			
			session(null);  //清除所有的session
			
      return $this->success('退出成功','Login/login');

		}
		
		
	
		
}