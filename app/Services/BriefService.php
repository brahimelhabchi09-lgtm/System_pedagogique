<?php
namespace App\Services;

use App\Models\Brief;
use App\Repositories\BriefRepository;

class BriefService
{
  private $briefRepository;

  public function __construct()
  {
    $this->briefRepository = new BriefRepository();
  }

  public function createBrief(array $data)
  {
    $brief = new Brief(
      $data['title'],
      $data['description'],
      $data['start_date'],
      $data['end_date'],
      $data['sprint_id']
    );
    $this->briefRepository->create($brief);
  }

  public function getAllBriefs()
  {
    return $this->briefRepository->findAll();
  }
}
