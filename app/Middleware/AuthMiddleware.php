<?php

namespace App\Middleware;

class AuthMiddleware
{
  public function handle()
  {
    if (!isset($_SESSION['user'])) {
      header('Location: /login');
      exit;
    }
  }
}
