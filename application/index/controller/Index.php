<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
		
	   $cates=db('cate')->select();	
	   $friends=db('friend')->select();	
	   $articles=db('article')->limit(10)->select();	
     $articless=db('article')->paginate(3);	
	   
	   
	   $this->assign('cates',$cates);
	   $this->assign('friends',$friends);
		 $this->assign('articles',$articles);
	   $this->assign('articless',$articless);

       return $this->fetch();
    }
		
		
		
		public function search()
		    {
				
				 $search=input('search');	
			   echo $search;		 
			   $cates=db('cate')->select();	
			   $friends=db('friend')->select();	
			   $articles=db('article')->limit(10)->select();	
		     $articless=db('article')->where("title like '%$search%'")->paginate(3);	
				 
				 
			   
			   $this->assign('cates',$cates);
			   $this->assign('friends',$friends);
				 $this->assign('articles',$articles);
			   $this->assign('articless',$articless);
		
		       return $this->fetch();
		    }
	
				
}
