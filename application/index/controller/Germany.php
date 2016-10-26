<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------

namespace app\index\controller;
use app\common\controller\Fornt;

class Germany extends Fornt{

	//网站首页
	public function index(){
		return $this->fetch();
	}

	public function getList($country = '中国',$category = '',$writer = ''){
//		$where = array();
		$keyWord = input('get.keyWord','');
		if($country){
			$where['country'] =  $country;
		}
		if($category){
			$where['category'] =  $category;
		}
		if($writer){
			$where['writer'] =  $writer;
		}
		if($keyWord){
			$where['title'] =  ['like','%'.$keyWord.'%'];
		}
		$list = db('shouhuodeguo')->where($where)->order('top desc,sort desc,create_time desc')->select();
		$cate = db('shouhuodeguo')->where(['country'=>$country])->field('distinct category')->select();
		$this->assign('country',$country);
		$this->assign('cate',$cate);
		$this->assign('list',$list);
		return $this->fetch();
	}

	public function detail($id){
		$data = db('shouhuodeguo')->where(['id'=>$id])->find();
		$img = db('picture')->where(['id'=>$data['img']])->field('path')->find();
		db('shouhuodeguo')->where(['id'=>$id])->update(['click'=>$data['click']+1]);
		$this->assign('img',$img);
		$this->assign('data',$data);
		return $this->fetch();
	}

	public function partner(){
		$list = db('partner')->alias('p')->join('sent_picture a','p.picture=a.id')->order('p.sort desc')->field('title,content,path,p.id')->select();
		$this->assign('list',$list);
		return $this->fetch();
	}

	public function partnerDetail($id = ''){
		$data = db('partner')->alias('p')->join('sent_picture a','p.picture=a.id')->where(['p.id' => $id])->field('title,content,path')->find();
		$this->assign('data',$data);
		return $this->fetch();
	}

	public function aboutUs(){
		return $this->fetch();
	}

	public function fabu(){
		return $this->fetch();
	}
}
