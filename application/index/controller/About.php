<?php
namespace app\index\controller;
use think\Controller;
class About extends Controller
{
    public function index()
    {
                  $id=input('id');
                  $cates=db('cate')->select();	
       
              	  $friends=db('friend')->select();	
              	  $articles=db('article')->limit(10)->select();	
                 $article=db('article')->find($id);	
       					 $typeid=$article['typeid'];
       				   $cate=db('cate')->where('id','=',$typeid)->find();	
       					 $comments=db('comment')->field('comment.*,user.username,user.pic')->join('user','comment.uid=user.id')->paginate(2);	
                 $about=db('about')->find(2);
       
              	   
              	   
              	   $this->assign('cates',$cates);
              	   $this->assign('friends',$friends);
              		 $this->assign('articles',$articles);
              	   $this->assign('article',$article);
                  $this->assign('cate',$cate);
       					 $this->assign('comments',$comments);
								 $this->assign('about',$about);

                   return $this->fetch();
    }
}
