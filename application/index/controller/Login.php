<?php
namespace app\index\controller;
use think\Controller;
class Login extends Controller
{
   public function add()
   	{
   		
   	if(request()->isPost()){
   		$data=[
   			'username'=>input('username'),
   			'password'=>input('password'),
   			'time'=>time(),		
   			'nickname'=>input('nickname'),
         
   		];
   		
   		
   		
   		//图片上传
   		
   		if($_FILES['pic']['tmp_name']){
   			 $file = request()->file('pic');
       
       // 移动到框架应用根目录/public/uploads/ 目录下
       if($file){
           $info = $file->move(ROOT_PATH . 'public' . DS . 'upload/user');
           if($info){
               // 成功上传后 获取上传信息
               
               // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
               $data['pic']='upload/user/'.$info->getSaveName();     //路径： 20190506\c473eee00f09cd03577af175adfe7c89.jpg
               
   						
   						
           }else{
               // 上传失败获取错误信息
               echo $file->getError();
           }
       }
   		
   				
   		//	dump($data);			
   			
   		
   							
   		}
   	
   		$a=db('user')->where('username','=',$data['username'])->find();
   		if($a){
   			return $this->error('该会员已存在，请重新注册');
   		}else{
   		if(db('user')->insert($data)){
   			return $this->success('会员添加成功','Index/index');
   			
   		}else{
   			return $this->error('会员添加失败');
   			
   		}
   		}
   		
   		}
   	
   
   
   	return $this->fetch();
   	}
   
		
		
		
		 public function login()
		    {
					if(Request()->isPost()){
						$data=[
							'username'=>input('username'),
							'password'=>input('password'),	
							'code'=>input('code'),
						];
								
						$user=db('user')->where('username','=',$data['username'])->where('password','=',$data['password'])->find();
						session('username',$user['username']);
						session('id',$user['id']); 
					  
						
						if($user){
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
					
		      return $this->success('退出成功','Index/Index');
		
				}
				
		
		
		
	
	
				
}
