<?php
namespace App\Repositories;

use App\Interfaces\SubmissionRepositoryInterface;
use App\Models\Submission;
use App\Mappers\SubmissionMapper;
use Core\Database\Database;
use PDO;

class SubmissionRepository implements SubmissionRepositoryInterface
{
  private SubmissionMapper $mapper;

  public function __construct()
  {
    $this->mapper = new SubmissionMapper();
  }

  public function create(Submission $submission)
  {
    $data = $this->mapper->toDatabase($submission);

    $query = "INSERT INTO submission (student_id, brief_id, status, repository_link) VALUES (:student_id, :brief_id, :status, :repository_link)";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([
      ':student_id' => $data['student_id'],
      ':brief_id' => $data['brief_id'],
      ':status' => $data['status'],
      ':repository_link' => $data['repository_link']
    ]);
  }

  public function findAll()
  {
    $query = "SELECT * FROM submission";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute();
    $submissionsData = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $submissions = [];
    foreach ($submissionsData as $data) {
      // Map database columns to entity properties
      $data['date_submitted'] = $data['created_at'];
      $submissions[] = $this->mapper->toEntity($data);
    }
    return $submissions;
  }

  public function findAllWithDetails()
  {
    $query = "SELECT s.*, u.first_name, u.last_name, b.title as brief_title 
              FROM submission s 
              JOIN users u ON s.student_id = u.id 
              JOIN brief b ON s.brief_id = b.id
              ORDER BY s.created_at DESC";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }
}
