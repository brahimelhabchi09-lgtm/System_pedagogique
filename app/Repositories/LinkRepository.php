<?php
namespace App\Repositories;

use App\Interfaces\LinkRepositoryInterface;
use App\Models\Link;
use App\Mappers\LinkMapper;
use Core\Database\Database;
use PDO;

class LinkRepository implements LinkRepositoryInterface
{
  private LinkMapper $mapper;

  public function __construct()
  {
    $this->mapper = new LinkMapper();
  }

  public function create(Link $link)
  {
    $data = $this->mapper->toDatabase($link);

    $query = "INSERT INTO link (url, type, brief_id) VALUES (:url, :type, :brief_id)";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([
      ':url' => $data['url'],
      ':type' => $data['type'],
      ':brief_id' => $data['brief_id']
    ]);
  }

  public function findAllByBriefId($briefId)
  {
    $query = "SELECT * FROM link WHERE brief_id = :brief_id";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([':brief_id' => $briefId]);
    $linksData = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $links = [];
    foreach ($linksData as $data) {
      $links[] = $this->mapper->toEntity($data);
    }
    return $links;
  }
}
