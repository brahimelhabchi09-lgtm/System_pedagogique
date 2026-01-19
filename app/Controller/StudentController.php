<?php
namespace App\Controller;
use Core\Helpers\View;
class StudentController extends Controller{
    public function index(){
        return $this->view("Student.evulation");
    }
}