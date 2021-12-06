<?php
namespace app\admin\controller;



use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return 'app: admin, controller index';
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
