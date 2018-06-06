<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Test as ModelTest;
class Index extends Controller
{
    public function index()
    {
		//$this->a  ssign('name','thinkphp');
		
		return $this->fetch('index',['$user'=>'thinkphp'],['$num'=>'123456']);
		
    }
}
