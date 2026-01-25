<?php

namespace App\Controller;

use Core\Database\Database;

class AuthController extends Controller
{
    public function login()
    {
        return $this->view("Auth.login");
    }

    public function submitLogin()
    {
        if (!isset($_POST["email"]) || !isset($_POST["password"])) {
            return $this->view("Auth.login", [
                "error" => "Please provide both email and password"
            ]);
        }

        $query = "SELECT * FROM users WHERE email = :email";

        $stmt = Database::getConnection()->prepare($query);
        $stmt->execute([
            "email" => $_POST["email"]
        ]);

        $user = $stmt->fetch();

        if ($user && password_verify($_POST["password"], $user["password"])) {
            $_SESSION["user"] = $user;

            if ($user['role'] === 'ADMIN') {
                header("Location: /admin");
            } elseif ($user['role'] === 'TEACHER') {
                header("Location: /Formateur");
            } elseif ($user['role'] === 'STUDENT') {
                header("Location: /Student");
            } else {
                header("Location: /");
            }
            exit;
        }

        return $this->view("Auth.login", [
            "error" => "Invalid email or password"
        ]);
    }
    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        header("Location: /");
        exit;
    }

}
