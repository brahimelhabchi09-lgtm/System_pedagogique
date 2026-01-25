<?php
namespace App\Mappers;

use App\Models\Sprint;

class SprintMapper
{
  public function toEntity(array $data): Sprint
  {
    return new Sprint(
      $data['name'],
      $data['description'],
      $data['start_date'],
      $data['end_date'],
      $data['id'] ?? null
    );
  }

  public function toDatabase(Sprint $sprint): array
  {
    return [
      'name' => $sprint->getName(),
      'description' => $sprint->getDescription(),
      'start_date' => $sprint->getStartDate(),
      'end_date' => $sprint->getEndDate()
    ];
  }
}
