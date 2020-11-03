<?php

namespace app\index\controller;
use think\Controller;

class Infree extends Controller
{
    public function index()
    {
        return $this->fetch('/about_infree');
    }
}