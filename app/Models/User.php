<?php
namespace App\Models;

class User
{
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password;
    protected $phone;
    protected $age;
    protected $createdAt;

    public function __construct($firstName, $lastName, $email, $password, $phone = null, $age = null, $createdAt = null, $id = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->age = $age;
        $this->createdAt = $createdAt;
        $this->id = $id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
}