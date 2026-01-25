<?php
namespace App\Repositories;

use App\Models\Classe;
use App\Mappers\ClassMapper;
use Core\Database\Database;
use PDO;

class ClassRepository
{
  private ClassMapper $mapper;

  public function __construct()
  {
    $this->mapper = new ClassMapper();
  }

  public function create(Classe $classe)
  {
    try {
      $data = $this->mapper->toDatabase($classe);

      // 'user "class" cannot be used as a table name in query' is a potential issue if not quoted, but 'class' is reserved.
      // Schema uses 'class'. Check if 'class' is valid table name in PG. It's reserved keyword. Schema might have created it as "class".
      // Safer to use "class" with quotes or schema check. User provided schema used `CREATE TABLE class`.
      // In PostgreSQL, `class` is reserved. It usually requires quotes: "class".

      $query = 'INSERT INTO "class" (name, formation, grade, school_year, teacher_id) VALUES (:name, :formation, :grade, :school_year, :teacher_id)';
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute([
        ':name' => $data['name'],
        ':formation' => $data['formation'],
        ':grade' => $data['grade'],
        ':school_year' => $data['school_year'],
        ':teacher_id' => $data['teacher_id']
      ]);
    } catch (\PDOException $e) {
      die("Database Error in ClassRepository: " . $e->getMessage());
    }
  }

  public function findAll()
  {
    $query = 'SELECT * FROM "class"';
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute();
    $classesData = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $classes = [];
    foreach ($classesData as $data) {
      $classes[] = $this->mapper->toEntity($data);
    }
    return $classes;
    return $classes;
  }

  public function findByTeacher($teacherId)
  {
    $query = 'SELECT * FROM "class" WHERE teacher_id = :teacher_id LIMIT 1';
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([':teacher_id' => $teacherId]);
    $data = $stmt->fetch(\PDO::FETCH_ASSOC);
    if ($data) {
      return $this->mapper->toEntity($data);
    }
    return null;
  }

  public function addStudentToClass($classId, $studentId)
  {
    $query = "INSERT INTO class_students (class_id, student_id) VALUES (:class_id, :student_id)";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([':class_id' => $classId, ':student_id' => $studentId]);
  }
}
