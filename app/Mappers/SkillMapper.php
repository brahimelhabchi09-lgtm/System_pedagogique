<?php
namespace App\Mappers;

use App\Models\Skill;

class SkillMapper
{
  public function toEntity(array $data): Skill
  {
    return new Skill(
      $data['code'],
      $data['title'],
      $data['description'],
      $data['level'] ?? null,
      $data['niveau'] ?? null,
      $data['brief_id'] ?? null,
      $data['id'] ?? null
    );
  }

  public function toDatabase(Skill $skill): array
  {
    return [
      'code' => $skill->getCode(),
      'title' => $skill->getTitle(),
      'description' => $skill->getDescription(),
      'level' => $skill->getLevel(),
      'niveau' => $skill->getNiveau(),
      'brief_id' => $skill->getBriefId(),
      'id' => $skill->getId()
    ];
  }
}
