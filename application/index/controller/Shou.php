<?php
namespace app\index\controller;
use think\Controller;
class Shou extends Controller
{
    public function index()
    {
        if(request()->isPost()){
					$data=[
						'shouid'=>input('shouid'),
						'uid'=>input('uid'),
					'time'=>time(),
					];
					db('shou')->insert($data);
					if(empty($data['uid'])){
						return $this->error('请先登录','Index/index');
					}elseif($data['shouid']){
						db('article')->where('id','=',$data['shouid'])->setInc('shounum');
						return $this->success('收藏成功','Article/index');
					}
				}        
    }
}
