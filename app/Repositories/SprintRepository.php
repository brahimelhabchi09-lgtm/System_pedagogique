<?php
namespace App\Repositories;

use App\Interfaces\SprintRepositoryInterface;
use App\Models\Sprint;
use App\Mappers\SprintMapper;
use Core\Database\Database;
use PDO;

class SprintRepository implements SprintRepositoryInterface
{
  private SprintMapper $mapper;

  public function __construct()
  {
    $this->mapper = new SprintMapper();
  }

  public function create(Sprint $sprint)
  {
    try {
      $data = $this->mapper->toDatabase($sprint);

      $query = "INSERT INTO sprint (name, description, start_date, end_date) VALUES (:name, :description, :start_date, :end_date)";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute([
        ':name' => $data['name'],
        ':description' => $data['description'],
        ':start_date' => $data['start_date'],
        ':end_date' => $data['end_date']
      ]);
    } catch (\PDOException $e) {
      die("Database Error in SprintRepository: " . $e->getMessage());
    }
  }

  public function findAll()
  {
    $query = "SELECT * FROM sprint";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute();
    $sprintsData = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $sprints = [];
    foreach ($sprintsData as $data) {
      $sprints[] = $this->mapper->toEntity($data);
    }
    return $sprints;
  }
}
