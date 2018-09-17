<?php
namespace app\index\controller;
use think\Controller;

class Buyways extends Controller
{
    public function ways()
    {
        return $this->fetch();
        
    }
    public function tenancyList(){
    	return $this->fetch();
    }
    public function tenancyContent(){
    	return $this->fetch();
    }

}
