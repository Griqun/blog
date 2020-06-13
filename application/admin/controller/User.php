<?php
namespace app\admin\controller;
use think\Controller;
class User extends Lock
{
   
		
		public function index()
    {
			 $users=db('user')->select();
			$users=db('user')->order('id desc')->paginate(2);
		  $this->assign('users',$users);
		  return $this->fetch();
    }
	
	
	
	
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
			return $this->success('会员添加成功','user/index');
			
		}else{
			return $this->error('会员添加失败');
			
		}
		}
		
		}
	


	return $this->fetch();
	}

	public function del()
	{
		$id=input('id');
		if($id != 1){
			if(db('user')->delete($id)){
				return $this->success('删除成功','user/index');		
			}else{
				return $this->error('删除失败');	
			}	
			}else{
				return $this->error('超级会员不允许删除');		
			}
	
	}
	
	public function modify()
	{  
		$id=input('id');
		$user=db('user')->find($id);
		$this->assign('user',$user);
		return $this->fetch();
	}
	
		
		
		public function update()
			{
				
			if(request()->isPost()){
				$data=[
					'id'=>input('id'),
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
			
				if(db('user')->update($data)){
					return $this->success('会员修改成功','user/index');
					
				}else{
					return $this->error('会员修改失败');
					
				}
				
				}
			
		
		
			return $this->fetch();
			}
		

		
		
		
}