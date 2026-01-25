<?php
namespace App\Repositories;

use App\Models\Evaluation;
use Core\Database\Database;
use PDO;

class DebriefingRepository
{
  public function create(Evaluation $eval)
  {
    try {
      $query = "INSERT INTO evaluation (student_id, skill_id, level, comment) VALUES (:student_id, :skill_id, :level, :comment)";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute([
        ':student_id' => $eval->getStudentId(),
        ':skill_id' => $eval->getSkillId(),
        ':level' => $eval->getLevel(),
        ':comment' => $eval->getComment()
      ]);
    } catch (\PDOException $e) {
      die("Database Error in DebriefingRepository: " . $e->getMessage());
    }
  }

  public function findByStudentAndBrief($studentId, $briefId)
  {
    // Join schema to link skill to brief? 
    // skill.brief_id
    $query = "
        SELECT e.* 
        FROM evaluation e
        JOIN skill s ON e.skill_id = s.id
        WHERE e.student_id = :student_id AND s.brief_id = :brief_id
     ";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([':student_id' => $studentId, ':brief_id' => $briefId]);
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  public function findByStudent($studentId)
  {
    $query = "
        SELECT e.*, s.title as skill_title, s.code as skill_code, b.title as brief_title
        FROM evaluation e
        JOIN skill s ON e.skill_id = s.id
        JOIN brief b ON s.brief_id = b.id
        WHERE e.student_id = :student_id
     ";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([':student_id' => $studentId]);
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  public function update($id, $level, $comment)
  {
    $query = "UPDATE evaluation SET level = :level, comment = :comment WHERE id = :id";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([
      ':level' => $level,
      ':comment' => $comment,
      ':id' => $id
    ]);
  }

  public function delete($id)
  {
    $query = "DELETE FROM evaluation WHERE id = :id";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([':id' => $id]);
  }
}
