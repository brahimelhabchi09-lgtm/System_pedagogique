<?php
namespace App\Models;

class Evaluation
{
  private $id;
  private $studentId;
  private $skillId;
  private $level;
  private $comment;
  private $createdAt;

  public function __construct($studentId, $skillId, $level, $comment, $createdAt = null, $id = null)
  {
    $this->id = $id;
    $this->studentId = $studentId;
    $this->skillId = $skillId;
    $this->level = $level;
    $this->comment = $comment;
    $this->createdAt = $createdAt;
  }

  // Getters
  public function getId()
  {
    return $this->id;
  }
  public function getStudentId()
  {
    return $this->studentId;
  }
  public function getSkillId()
  {
    return $this->skillId;
  }
  public function getLevel()
  {
    return $this->level;
  }
  public function getComment()
  {
    return $this->comment;
  }
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
}
