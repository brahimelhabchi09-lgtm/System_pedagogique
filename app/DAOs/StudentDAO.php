<?php
namespace App\DAOs;

use Core\Database\Database;
use PDO;

class StudentDAO
{
  public function create(string $userId)
  {
    $query = "INSERT INTO students (id) VALUES (:id)";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([':id' => $userId]);
  }

  public function findAll()
  {
    $query = "SELECT * FROM users WHERE role = 'STUDENT'";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function findByTeacher($teacherId)
  {
    $query = "
            SELECT u.* 
            FROM users u
            JOIN class_students cs ON u.id = cs.student_id
            JOIN class c ON cs.class_id = c.id
            WHERE c.teacher_id = :teacher_id AND u.role = 'STUDENT'
        ";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([':teacher_id' => $teacherId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
