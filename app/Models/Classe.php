<?php
namespace App\Models;

class Classe
{
  private $id;
  private $name;
  private $formation;
  private $grade;
  private $schoolYear;
  private $teacherId;

  public function __construct($name, $formation, $grade, $schoolYear, $teacherId, $id = null)
  {
    $this->id = $id;
    $this->name = $name;
    $this->formation = $formation;
    $this->grade = $grade;
    $this->schoolYear = $schoolYear;
    $this->teacherId = $teacherId;
  }

  public function getId()
  {
    return $this->id;
  }
  public function getName()
  {
    return $this->name;
  }
  public function getFormation()
  {
    return $this->formation;
  }
  public function getGrade()
  {
    return $this->grade;
  }
  public function getSchoolYear()
  {
    return $this->schoolYear;
  }
  public function getTeacherId()
  {
    return $this->teacherId;
  }
}
