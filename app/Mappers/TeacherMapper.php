<?php
namespace App\Mappers;

use App\Models\Teacher;

class TeacherMapper
{
  public function toEntity(array $data): Teacher
  {
    return new Teacher(
      $data['first_name'],
      $data['last_name'],
      $data['email'],
      $data['password'],
      $data['phone'] ?? null,
      $data['age'] ?? null,
      $data['created_at'] ?? null,
      $data['id'] ?? null,
      $data['role'] ?? 'TEACHER'
    );
  }

  public function toDatabase(Teacher $teacher): array
  {
    return [
      'first_name' => $teacher->getFirstName(),
      'last_name' => $teacher->getLastName(),
      'email' => $teacher->getEmail(),
      'password' => $teacher->getPassword(),
      'phone' => $teacher->getPhone(),
      'age' => $teacher->getAge(),
      'created_at' => $teacher->getCreatedAt(),
      'id' => $teacher->getId(),
      'role' => 'TEACHER'
    ];
  }
}
