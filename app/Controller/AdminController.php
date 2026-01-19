<?php
namespace App\Controller;
use Core\Helpers\View;
class AdminController extends Controller{
    public function index(){
        return $this->view("Admin.dashboard");
    }
}