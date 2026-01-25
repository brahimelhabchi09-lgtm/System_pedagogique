<?php
namespace App\Models;

class Teacher extends User
{
    private $role;
    public function __construct($firstName, $lastName, $email, $password, $phone = null, $age = null, $createdAt = null, $id = null, $role = 'TEACHER')
    {
        parent::__construct($firstName, $lastName, $email, $password, $phone, $age, $createdAt, $id);
        $this->role = $role;
    }
}