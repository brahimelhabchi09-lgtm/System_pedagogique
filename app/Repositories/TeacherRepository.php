<?php
namespace App\Repositories;

use App\Interfaces\TeacherRepositoryInterface;
use App\Models\Teacher;
use App\Mappers\TeacherMapper;
use Core\Database\Database;

class TeacherRepository implements TeacherRepositoryInterface
{
  private TeacherMapper $mapper;

  public function __construct()
  {
    $this->mapper = new TeacherMapper();
  }

  public function create(Teacher $teacher)
  {
    try {
      $data = $this->mapper->toDatabase($teacher);
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

      // Insert into teachers
      $queryTeacher = "INSERT INTO teachers (id) VALUES (:id)";
      $stmtTeacher = Database::getConnection()->prepare($queryTeacher);
      $stmtTeacher->execute([':id' => $userId]);
    } catch (\PDOException $e) {
      die("Database Error in TeacherRepository: " . $e->getMessage());
    }
  }

  public function findAll()
  {
    // Fetching from users is sufficient as all currently mapped data is in users table
    $query = "SELECT * FROM users WHERE role = 'TEACHER'";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute();
    $teachersData = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $teachers = [];
    foreach ($teachersData as $data) {
      $teachers[] = $this->mapper->toEntity($data);
    }
    return $teachers;
  }
}
