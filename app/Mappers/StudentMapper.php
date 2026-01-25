<?php
namespace App\Mappers;

use App\Models\Student;

class StudentMapper
{
  public function toEntity(array $data): Student
  {
    return new Student(
      $data['first_name'],
      $data['last_name'],
      $data['email'],
      $data['password'],
      $data['phone'] ?? null,
      $data['age'] ?? null,
      $data['created_at'] ?? null,
      $data['id'] ?? null,
      $data['role'] ?? 'STUDENT'
    );
  }

  public function toDatabase(Student $student): array
  {
    return [
      'first_name' => $student->getFirstName(),
      'last_name' => $student->getLastName(),
      'email' => $student->getEmail(),
      'password' => $student->getPassword(),
      'phone' => $student->getPhone(),
      'age' => $student->getAge(),
      'created_at' => $student->getCreatedAt(),
      'id' => $student->getId(),
      'role' => 'STUDENT'
    ];
  }
}
