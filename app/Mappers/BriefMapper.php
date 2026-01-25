<?php
namespace App\Mappers;

use App\Models\Brief;

class BriefMapper
{
  public function toEntity(array $data): Brief
  {
    return new Brief(
      $data['title'],
      $data['description'],
      $data['start_date'],
      $data['end_date'],
      $data['sprint_id'],
      $data['id'] ?? null,
      $data['sprint_name'] ?? null
    );
  }

  public function toDatabase(Brief $brief): array
  {
    return [
      'title' => $brief->getTitle(),
      'description' => $brief->getDescription(),
      'start_date' => $brief->getStartDate(),
      'end_date' => $brief->getEndDate(),
      'sprint_id' => $brief->getSprintId(),
      'id' => $brief->getId()
    ];
  }
}
