<?php
namespace app\index\controller;
use think\Controller;
use \app\index\model\WzCase;

class Index extends Controller
{
    public function index()
    {
        $case = WzCase::order('addtime')->limit(8)->select();
        return $this->fetch('/index', [
            "latest_case" => $case
        ]);
    }
}
