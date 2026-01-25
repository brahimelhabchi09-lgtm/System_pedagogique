<?php
namespace App\Interfaces;

use App\Models\Student;

interface StudentRepositoryInterface
{
  public function create(Student $student);
  public function findAll();
}
