<?php
namespace App\Interfaces;

use App\Models\Skill;

interface SkillRepositoryInterface
{
  public function create(Skill $skill);
  public function findAll();
}
