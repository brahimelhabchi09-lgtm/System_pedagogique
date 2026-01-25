<?php
namespace App\Services;

use App\Models\Sprint;
use App\Repositories\SprintRepository;

class SprintService
{
  private $sprintRepository;

  public function __construct()
  {
    $this->sprintRepository = new SprintRepository();
  }

  public function createSprint($data)
  {
    $sprint = new Sprint(
      $data['name'],
      $data['description'],
      $data['start_date'],
      $data['end_date']
    );
    $this->sprintRepository->create($sprint);
  }

  public function getAllSprints()
  {
    return $this->sprintRepository->findAll();
  }
}
