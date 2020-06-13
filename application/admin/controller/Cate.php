<?php
namespace app\admin\controller;
use think\Controller;
class Cate extends Lock
{
	
	
    public function index()
    {
			// $cates=db('cate')->select();
			$cates=db('cate')->order('sort desc')->paginate(3);
		  $this->assign('cates',$cates);
		  return $this->fetch();
    }
	public function add()
	{
	if(request()->isPost()){
		$data=[
			'name'=>input('name'),
			'sort'=>input('sort'),		
		];
		$a=db('cate')->where('name','=',$data['name'])->find();
		if($a){
			return $this->error('该栏目已存在，请重新注册');
		}else{
		if(db('cate')->insert($data)){
			return $this->success('栏目添加成功','cate/index');
			
		}else{
			return $this->error('栏目添加失败');
			
		}
		}
		
		
	}	
		
	return $this->fetch();
	}

	public function del()
	{
		$id=input('id');
		if($id != 1){
			if(db('cate')->delete($id)){
				return $this->success('删除成功','cate/index');		
			}else{
				return $this->error('删除失败');	
			}	
			}else{
				return $this->error('超级栏目不允许删除');		
			}
	
	}
	
	public function modify()
	{  
		$id=input('id');
		$cate=db('cate')->find($id);
		$this->assign('cate',$cate);
		return $this->fetch();
	}
	
	
	
	public function update()
	{
	if(request()->isPost()){
		$data=[
			'id'=>input('id'),
			'name'=>input('name'),
			'sort'=>input('sort'),		
		];
		
		
		if(db('cate')->update($data)){
			return $this->success('栏目修改成功','cate/index');
			
		}else{
			return $this->error('栏目修改失败');
			
		}
		
		
		
		
		
	}	
	
	}
	
	
	
		
}