<?php
namespace App\Services;

use App\Models\Skill;
use App\Repositories\SkillRepository;

class SkillService
{
  private $skillRepository;

  public function __construct()
  {
    $this->skillRepository = new SkillRepository();
  }

  public function createSkill(array $data)
  {
    $skill = new Skill(
      $data['name'],
      $data['description']
    );
    $this->skillRepository->create($skill);
  }

  public function getAllSkills()
  {
    return $this->skillRepository->findAll();
  }
}
