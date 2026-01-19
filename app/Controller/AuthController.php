<?php
namespace App\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return $this->view("Auth.login");
    }
}