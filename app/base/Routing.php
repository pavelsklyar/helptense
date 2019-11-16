<?php


namespace base;


use app\model\Router;

class Routing
{
    /**
     * @var $rules Router[]
     */
    public $rules;
    private $currentRoute;

    public function __construct()
    {
        $this->rules = array();
    }

    public  function add($method, $link, $controller, $action)
    {
        $this->rules[] = new Router($method, $link, $controller, $action);
    }


//
//    public function check($link, $method, $controller, $action)
//    {
//        if(!isset($this->currentRoute)) {
//            $r = new Router();
//            $check = $r->checkLink();
//            if($check===true) {
//                $this->currentRoute = $r;
//            }
//        } else {
//          return false;
//        }
//    }
//
//    function checkRouting() {
//        $this->check('','','','');
//    }


}