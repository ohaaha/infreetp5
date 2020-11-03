<?php

namespace app\index\model;
use think\Model;

class WzProduceCate extends Model
{
    protected static function init()
    {

    }

    public function product()
    {
        return $this->hasMany('WzProduce', 'cateid', 'id');
    }
}