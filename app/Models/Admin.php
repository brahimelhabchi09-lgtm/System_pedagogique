<?php

use App\Models\User;

class Admin extends User {
    private $role;

    public function __construct($firstName, $lastName, $email, $password , $role = 'ADMIN') {
        parent::__construct($firstName, $lastName, $email, $password);
        $this->role = $role;
    }
}