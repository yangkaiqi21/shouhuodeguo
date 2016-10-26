<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------

namespace app\common\model;

/**
* 设置模型
*/
class Partner extends Base{

    public function del($map){
        return $this->where($map)->delete();
    }

    public function detail($id){
        $map['id'] = $id;
        $this->data = $this->db()->where($map)->find();
        return $this->data;
    }
}