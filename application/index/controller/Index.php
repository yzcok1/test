<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Test as ModelTest;
class Index extends Controller
{
    public function index()
    {
		//$this->assign('name','thinkphp');
		return $this->fetch('index',['name'=>'thinkphp']);
		
    }
}
