<?php
namespace App\Repositories;

use App\Interfaces\BriefRepositoryInterface;
use App\Models\Brief;
use App\Mappers\BriefMapper;
use Core\Database\Database;
use PDO;

class BriefRepository implements BriefRepositoryInterface
{
  private BriefMapper $mapper;

  public function __construct()
  {
    $this->mapper = new BriefMapper();
  }

  public function create(Brief $brief)
  {
    try {
      $data = $this->mapper->toDatabase($brief);

      $query = "INSERT INTO brief (title, description, start_date, end_date, sprint_id) VALUES (:title, :description, :start_date, :end_date, :sprint_id)";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute([
        ':title' => $data['title'],
        ':description' => $data['description'],
        ':start_date' => $data['start_date'],
        ':end_date' => $data['end_date'],
        ':sprint_id' => $data['sprint_id']
      ]);
    } catch (\PDOException $e) {
      die("Database Error in BriefRepository: " . $e->getMessage());
    }
  }

  public function findAll()
  {
    $query = "SELECT b.*, s.name as sprint_name FROM brief b LEFT JOIN sprint s ON b.sprint_id = s.id";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute();
    $briefsData = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $briefs = [];
    foreach ($briefsData as $data) {
      $briefs[] = $this->mapper->toEntity($data);
    }
    return $briefs;
  }
}
