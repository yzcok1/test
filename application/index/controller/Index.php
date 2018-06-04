<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Test as ModelTest;
class Index extends Controller
{
    public function index()
    {
		$this->assign('name','hello');
		return $this->fetch('index');
		
    }
}
