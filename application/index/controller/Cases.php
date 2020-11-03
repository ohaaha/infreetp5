<?php

namespace app\index\controller;
use think\Controller;
use \app\index\model\WzCase;
use \app\index\model\WzCaseCate;

class Cases extends Controller
{
    public function index()
    {
        $data = WzCase::order('addtime desc')->paginate(12);
        return $this->fetch('/customer_case', [
            'data' => $data
        ]);
    }
    public function get_cases($key) {
        return WzCaseCate::get($key)->cases()->order('addtime desc')->paginate(12);
    }
}