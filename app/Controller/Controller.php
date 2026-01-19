<?php
namespace App\Controller;
use Core\Helpers\View;


class Controller{
    public function view($view , $data = []){
        return View::render($view , $data);
    }
}