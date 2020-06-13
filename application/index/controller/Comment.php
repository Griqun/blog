<?php
namespace app\index\controller;
use think\Controller;

class Comment extends Controller
{
    public function index()
    {
			   if(request()->isPost()){
					 $data=[
						 'nid'=>input('nid'),
						 'uid'=>input('uid'),
						 'text'=>input('text'),
						 'time'=>time(),			 
					 ];
					 if(db('comment')->insert($data)){
						 
						 return $this->success('评论发表成功','Article/index');
						 
						 
					 }else{
						 
						 return $this->error('评论发表失败');
					 }
				 }
    }
}
