<?php
namespace app\admin\controller;
use think\Controller;
class Article extends Lock
{
   
		
		
		
		public function index()
    {
			// $articles=db('article')->select();
			$articles=db('article')->field('article.*,cate.name,cate.sort')->join('cate','cate.id=article.typeid')->order('article.id desc')->paginate(5);
		  $this->assign('articles',$articles);
		  return $this->fetch();
    }
	
	
	
	public function add()
	{
		$cates=db('cate')->select();
		

	if(request()->isPost()){
		$data=[
			'title'=>input('title'),
			'keywords'=>input('keywords'),
			'description'=>input('description'),
			'num'=>input('num'),
			'zannum'=>input('zannum'),
      'shounum'=>input('shounum'),
	    'author'=>input('author'),
			'typeid'=>input('typeid'),
			'text'=>input('text'),      
      'time'=>time()
		];
		//图片上传
		if($_FILES['pic']['tmp_name']){
			
			  $file = request()->file('pic');
    
    // 移动到框架应用根目录/public/uploads/ 目录下
    if($file){
        $info = $file->move(ROOT_PATH . 'public' . DS . 'upload/article');
        if($info){
            
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            $data['pic']='upload/article/'.$info->getSaveName();
           
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
    }
			
			
			
			
		}
		
		
		

		
		
		
		$a=db('article')->where('title','=',$data['title'])->find();
		if($a){
			return $this->error('该文章已存在，请重新注册');
		}else{
		if(db('article')->insert($data)){
			return $this->success('文章添加成功','article/index');
			
		}else{
			return $this->error('文章添加失败');
			
		}
		}
		
		
	}	

	$this->assign('cates',$cates);	
	return $this->fetch();
	}



	public function del()
	{
		$id=input('id');
		if($id != 1){
			if(db('article')->delete($id)){
				return $this->success('删除成功','article/index');		
			}else{
				return $this->error('删除失败');	
			}	
			}else{
				return $this->error('超级文章不允许删除');		
			}
	
	}
	
	
	
	public function modify()
	{  
		$cates=db('cate')->select();

		$id=input('id');
		$article=db('article')->find($id);
		$this->assign('article',$article);
		$this->assign('cates',$cates);
		return $this->fetch();
	}
	
	
	
	
	public function update()
		{
			$cates=db('cate')->select();
			
	
		if(request()->isPost()){
			$data=[
				'id'=>input('id'),
				'title'=>input('title'),
				'keywords'=>input('keywords'),
				'description'=>input('description'),
				'num'=>input('num'),
				'zannum'=>input('zannum'),
	      'shounum'=>input('shounum'),
		    'author'=>input('author'),
				'typeid'=>input('typeid'),
				'text'=>input('text'),      
	      'time'=>time()
			];
			//图片上传
			if($_FILES['pic']['tmp_name']){
				
				  $file = request()->file('pic');
	    
	    // 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){
	        $info = $file->move(ROOT_PATH . 'public' . DS . 'upload/article');
	        if($info){
	            
	            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
	            $data['pic']='upload/article/'.$info->getSaveName();
	           
	        }else{
	            // 上传失败获取错误信息
	            echo $file->getError();
	        }
	    }
				
				
				
			}
			
			
			
		
			if(db('article')->update($data)){
				return $this->success('文章修改成功','article/index');
				
			}else{
				return $this->error('文章修改失败');
				
			}
	
	  }
		$this->assign('cates',$cates);	
		return $this->fetch();
		}	
		
}