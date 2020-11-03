<?php

namespace app\index\controller;
use think\Controller;
use \app\index\model\WzProduceCate;

class Product extends Controller
{
    // 全系产品
    public function index()
    {
        $key = input() || 1;
        $data = $this->get_product($key);
        return $this->fetch('/all_product', [
            "data" => $data
        ]);
    }

    // 升降式无纸化
    public function lift_paperless()
    {
        $data = $this->get_product(1);
        return $this->fetch('/lift_paperless', [
            "data" => $data
        ]);
    }

    // 桌面式无纸化
    public function desk_paperless()
    {
        $data = $this->get_product(5);
        return $this->fetch('/desk_paperless', [
            "data" => $data
        ]);
    }

    // 电子桌牌
    public function ele_tabcard()
    {
        $data = $this->get_product(2);
        return $this->fetch('/ele_tabcard', [
            "data" => $data
        ]);
    }

    // 软件产品
    public function soft_product()
    {
        $data = $this->get_product(4);
        return $this->fetch('/soft_product', [
            "data" => $data
        ]);
    }

    // 液晶屏升降器
    public function liqcry_lift()
    {
        $data = $this->get_product(3);
        return $this->fetch('/liqcry_lift', [
            "data" => $data
        ]);
    }

    // 获取产品数据
    private function get_product($key)
    {
        return WzProduceCate::get($key)->product()->paginate(12);
    }
}