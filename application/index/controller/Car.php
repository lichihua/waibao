<?php
namespace app\index\controller;
use think\Controller;

class Car extends Controller
{
    public function carList()
    {
        return $this->fetch();
        
    }

    public function carShow(){
    	return $this->fetch();
    }

    public function carVideoList(){
    	return $this->fetch();

    }

}
