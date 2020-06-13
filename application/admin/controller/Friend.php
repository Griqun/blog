<?php
namespace app\admin\controller;
use think\Controller;
class Friend extends Lock
{
	
	
	
    public function index()
    {
			// $friends=db('friend')->select();
			$friends=db('friend')->order('sort desc')->paginate(3);
		  $this->assign('friends',$friends);
		  return $this->fetch();
    }
	public function add()
	{
	if(request()->isPost()){
		$data=[
			'name'=>input('name'),
			'sort'=>input('sort'),
			'url'=>input('url'),
			
		];
		$a=db('friend')->where('name','=',$data['name'])->find();
		if($a){
			return $this->error('该友情已存在，请重新注册');
		}else{
		if(db('friend')->insert($data)){
			return $this->success('友情添加成功','friend/index');
			
		}else{
			return $this->error('友情添加失败');
			
		}
		}
		
		
	}	
		
	return $this->fetch();
	}

	public function del()
	{
		$id=input('id');
		if($id != 1){
			if(db('friend')->delete($id)){
				return $this->success('删除成功','friend/index');		
			}else{
				return $this->error('删除失败');	
			}	
			}else{
				return $this->error('超级友情不允许删除');		
			}
	
	}
	
	public function modify()
	{  
		$id=input('id');
		$friend=db('friend')->find($id);
		$this->assign('friend',$friend);
		return $this->fetch();
	}
	
	
public function update()
	{
	if(request()->isPost()){
		$data=[
			'id'=>input('id'),
			'name'=>input('name'),
			'sort'=>input('sort'),
			'url'=>input('url'),	
		];
	
	if(db('friend')->update($data)){
		return $this->success('友情修改成功','friend/index');
		
	}else{
		return $this->error('友情修改失败');
		
	}
	
	}
		
	}	





		
}