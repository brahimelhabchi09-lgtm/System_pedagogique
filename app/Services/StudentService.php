<?php
namespace App\Services;

use App\Models\Student;
use App\Repositories\StudentRepository;

class StudentService
{
  private $studentRepository;

  public function __construct()
  {
    $this->studentRepository = new StudentRepository();
  }

  public function createStudent($data)
  {
    $student = new Student(
      $data['first_name'],
      $data['last_name'],
      $data['email'],
      $data['password'],
      $data['phone'] ?? null,
      $data['age'] ?? null,
      null, // createdAt
      null, // id
      'STUDENT'
    );
    return $this->studentRepository->create($student);
  }

  public function getAllStudents()
  {
    return $this->studentRepository->findAll();
  }

  public function getStudentsByTeacher($teacherId)
  {
    return $this->studentRepository->findByTeacher($teacherId);
  }

  public function getStudentById($id)
  {
    return $this->studentRepository->findById($id);
  }
}
