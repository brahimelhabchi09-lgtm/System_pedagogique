<?php
namespace App\Repositories;

use App\Interfaces\SkillRepositoryInterface;
use App\Models\Skill;
use App\Mappers\SkillMapper;
use Core\Database\Database;
use PDO;

class SkillRepository implements SkillRepositoryInterface
{
  private SkillMapper $mapper;

  public function __construct()
  {
    $this->mapper = new SkillMapper();
  }

  public function create(Skill $skill)
  {
    try {
      $data = $this->mapper->toDatabase($skill);

      $query = "INSERT INTO skill (code, title, description, level, niveau, brief_id) VALUES (:code, :title, :description, :level, :niveau, :brief_id)";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute([
        ':code' => $data['code'],
        ':title' => $data['title'],
        ':description' => $data['description'],
        ':level' => $data['level'],
        ':niveau' => $data['niveau'],
        ':brief_id' => $data['brief_id']
      ]);
    } catch (\PDOException $e) {
      die("Database Error in SkillRepository: " . $e->getMessage());
    }
  }

  public function findAll()
  {
    $query = "SELECT * FROM skill";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute();
    $skillsData = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $skills = [];
    foreach ($skillsData as $data) {
      $skills[] = $this->mapper->toEntity($data);
    }
    return $skills;
  }
}
