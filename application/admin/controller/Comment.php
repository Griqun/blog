<?php
namespace app\admin\controller;
use think\Controller;
class Comment extends Lock
{
	
	
	
	
    public function index()
    {
			// $comments=db('comment')->select();
		//	$comments=db('comment')->order('id desc')->paginate(2);
		
		  $comments=db('comment')->field('comment.*,article.title,user.pic,user.username')->join('user','user.id=comment.uid')->join('article','article.id=comment.nid')->order('comment.id desc')->paginate(2);
		  $this->assign('comments',$comments);
		  return $this->fetch();
    }
	public function add()
	{
	if(request()->isPost()){
		$data=[
			'nid'=>input('nid'),
			'uid'=>input('uid'),
			'time'=>time(),
			'text'=>input('text'),	
		];
		
		if(db('comment')->insert($data)){
			return $this->success('评论添加成功','comment/index');
			
		}else{
			return $this->error('评论添加失败');
			
		}
				
	}	
		
	return $this->fetch();
	}

	public function del()
	{
		$id=input('id');
		if($id != 1){
			if(db('comment')->delete($id)){
				return $this->success('删除成功','comment/index');		
			}else{
				return $this->error('删除失败');	
			}	
			}else{
				return $this->error('超级评论不允许删除');		
			}
	
	}
	
	public function modify()
	{  
		$id=input('id');
		$comment=db('comment')->find($id);
		$this->assign('comment',$comment);
		return $this->fetch();
	}
	
	public function update()
		{
		if(request()->isPost()){
			$data=[
				'id'=>input('id'),
				'nid'=>input('nid'),
				'uid'=>input('uid'),
				'time'=>time(),
				'text'=>input('text'),	
			];
			
			if(db('comment')->update($data)){
				return $this->success('评论修改成功','comment/index');
				
			}else{
				return $this->error('评论修改失败');
				
			}
					
		}	
			
		return $this->fetch();
		}
	

		
}