<?php
namespace app\admin\controller;
use think\Controller;
class Admin extends Lock
{
	
	 
	
	
    public function index()
    {
			// $admins=db('admin')->select();
			$admins=db('admin')->order('id desc')->paginate(2);
		  $this->assign('admins',$admins);
		  return $this->fetch();
    }
	public function add()
	{
	if(request()->isPost()){
		$data=[
			'username'=>input('username'),
			'password'=>input('password'),
			'time'=>time()			
		];
		$a=db('admin')->where('username','=',$data['username'])->find();
		if($a){
			return $this->error('该管理员已存在，请重新注册');
		}else{
		if(db('admin')->insert($data)){
			return $this->success('管理员添加成功','Admin/index');
			
		}else{
			return $this->error('管理员添加失败');
			
		}
		}
		
		
	}	
		
	return $this->fetch();
	}

	public function del()
	{
		$id=input('id');
		if($id != 1){
			if(db('admin')->delete($id)){
				return $this->success('删除成功','Admin/index');		
			}else{
				return $this->error('删除失败');	
			}	
			}else{
				return $this->error('超级管理员不允许删除');		
			}
	
	}
	
	public function modify()
	{  
		$id=input('id');
		$admin=db('admin')->find($id);
		$this->assign('admin',$admin);
		return $this->fetch();
	}
	
	public function update() 
	{  
	if(request()->isPost()){
   $data=[ 
		'id'=>input('id'),
		'username'=>input('username'),
		'password'=>input('password'),
		'time'=>time()
		];
		
   if(db('admin')->update($data)){
   	return $this->success('管理员修改成功','Admin/index');
   	
   }else{
   	return $this->error('管理员修改失败');
   	
   }
   }
	 }

		
}