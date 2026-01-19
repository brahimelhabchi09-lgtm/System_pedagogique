<?php
namespace App\Controller;
use Core\Helpers\View;
class FormateurController extends Controller{
    public function index(){
        return $this->view("Formateur.dashboard");
    }
}