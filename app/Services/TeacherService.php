<?php
namespace App\Services;

use App\Models\Teacher;
use App\Repositories\TeacherRepository;

class TeacherService
{
  private $teacherRepository;

  public function __construct()
  {
    $this->teacherRepository = new TeacherRepository();
  }

  public function createTeacher($data)
  {
    $teacher = new Teacher(
      $data['first_name'],
      $data['last_name'],
      $data['email'],
      $data['password'],
      $data['phone'] ?? null,
      $data['age'] ?? null,
      null, // createdAt
      null, // id
      $data['role']
    );
    $this->teacherRepository->create($teacher);
  }

  public function getAllTeachers()
  {
    return $this->teacherRepository->findAll();
  }
}
