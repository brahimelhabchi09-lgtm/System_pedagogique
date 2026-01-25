<?php
namespace App\Mappers;

use App\Models\Classe;

class ClassMapper
{
  public function toEntity(array $data): Classe
  {
    return new Classe(
      $data['name'],
      $data['formation'],
      $data['grade'],
      $data['school_year'],
      $data['teacher_id'],
      $data['id'] ?? null
    );
  }

  public function toDatabase(Classe $classe): array
  {
    return [
      'name' => $classe->getName(),
      'formation' => $classe->getFormation(),
      'grade' => $classe->getGrade(),
      'school_year' => $classe->getSchoolYear(),
      'teacher_id' => $classe->getTeacherId(),
      'id' => $classe->getId()
    ];
  }
}
