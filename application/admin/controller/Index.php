<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Lock
{
    
	
	
	
	
	public function index()
    {
       return $this->fetch();
    }
}
