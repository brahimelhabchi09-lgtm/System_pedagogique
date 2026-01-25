<?php
namespace App\DAOs;

use Core\Database\Database;
use PDO;

class UserDAO
{
  public function create(array $data)
  {
    $query = "INSERT INTO users (first_name, last_name, email, password, phone, age, role) VALUES (:first_name, :last_name, :email, :password, :phone, :age, :role) RETURNING id";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([
      ':first_name' => $data['first_name'],
      ':last_name' => $data['last_name'],
      ':email' => $data['email'],
      ':password' => $data['password'],
      ':phone' => $data['phone'],
      ':age' => $data['age'],
      ':role' => $data['role']
    ]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result ? $result['id'] : null;
  }
}
