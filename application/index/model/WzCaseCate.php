<?php

namespace app\index\model;
use think\Model;

class WzCaseCate extends Model
{
    protected static function init()
    {

    }

    public function cases()
    {
        return $this->hasMany('WzCase', 'cateid', 'id');
    }
}