<?php
namespace app\admin\controller;
use think\Controller;
class Lock extends Controller
{
    public function _initialize(){    //初始化
		
		if(!session('username')){
			
			return $this->error('请先登录','Login/login');
			
		}
		
	}

	
}
