<?php
namespace app\index\controller;
use think\Controller;
class Cate extends Controller
{
    public function index()
        {
					      $id=input('id');  //栏目id
						    $cates=db('cate')->select();	
							   $friends=db('friend')->select();	
							   $articles=db('article')->limit(10)->select();	
						     $articless=db('article')->where('typeid','=',$id)->paginate(3);	
							   
							   
							   $this->assign('cates',$cates);
							   $this->assign('friends',$friends);
								 $this->assign('articles',$articles);
							   $this->assign('articless',$articless);
						
						       return $this->fetch();
    		
        }
}
