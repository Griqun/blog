<?php
namespace app\index\controller;
use think\Controller;
class Zan extends Controller
{
    public function index()
    {
        if(request()->isPost()){
					$data=[
						'zanid'=>input('zanid'),
						'uid'=>input('uid'),
					'time'=>time(),
					];
					db('zan')->insert($data);
					if(empty($data['uid'])){
						return $this->error('请先登录','Index/index');
					}elseif($data['zanid']){
						db('article')->where('id','=',$data['zanid'])->setInc('zannum');
						return $this->success('点赞成功','Article/index');
					}
				}        
    }
}
