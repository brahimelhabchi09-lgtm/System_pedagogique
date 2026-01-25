<?php
namespace App\Repositories;

use App\Interfaces\StudentRepositoryInterface;
use App\Models\Student;
use App\Mappers\StudentMapper;
use Core\Database\Database;

class StudentRepository implements StudentRepositoryInterface
{
  private StudentMapper $mapper;

  public function __construct()
  {
    $this->mapper = new StudentMapper();
  }

  public function create(Student $student)
  {
    try {
      $data = $this->mapper->toDatabase($student);
      $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

      // Insert into users
      $queryUser = "INSERT INTO users (first_name, last_name, email, password, phone, age, role) VALUES (:first_name, :last_name, :email, :password, :phone, :age, :role) RETURNING id";
      $stmtUser = Database::getConnection()->prepare($queryUser);
      $stmtUser->execute([
        ':first_name' => $data['first_name'],
        ':last_name' => $data['last_name'],
        ':email' => $data['email'],
        ':password' => $data['password'],
        ':phone' => $data['phone'],
        ':age' => $data['age'],
        ':role' => $data['role']
      ]);

      $result = $stmtUser->fetch(\PDO::FETCH_ASSOC);

      if (!$result) {
        throw new \Exception("Failed to insert user and retrieve ID.");
      }

      $userId = $result['id'];

      // Insert into students
      $queryStudent = "INSERT INTO students (id) VALUES (:id)";
      $stmtStudent = Database::getConnection()->prepare($queryStudent);
      $stmtStudent->execute([':id' => $userId]);

      return $userId;
    } catch (\PDOException $e) {
      die("Database Error in StudentRepository: " . $e->getMessage());
    }
  }

  public function findAll()
  {
    $query = "SELECT * FROM users WHERE role = 'STUDENT'";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute();
    $studentsData = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $students = [];
    foreach ($studentsData as $data) {
      $students[] = $this->mapper->toEntity($data);
    }
    return $students;
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
    $studentsData = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $students = [];
    foreach ($studentsData as $data) {
      $students[] = $this->mapper->toEntity($data);
    }
    return $students;
  }

  public function findById($id)
  {
    $query = "SELECT * FROM users WHERE id = :id AND role = 'STUDENT'";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([':id' => $id]);
    $data = $stmt->fetch(\PDO::FETCH_ASSOC);

    return $data ? $this->mapper->toEntity($data) : null;
  }
}
