<?php
namespace App\Interfaces;

use App\Models\Teacher;

interface TeacherRepositoryInterface
{
  public function create(Teacher $teacher);
  public function findAll();
}
