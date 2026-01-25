<?php
namespace App\Models;

class Submission
{
  private $id;
  private $studentId;
  private $briefId;
  private $dateSubmitted;
  private $status;
  private $repositoryLink;

  public function __construct($studentId, $briefId, $dateSubmitted, $status, $repositoryLink, $id = null)
  {
    $this->id = $id;
    $this->studentId = $studentId;
    $this->briefId = $briefId;
    $this->dateSubmitted = $dateSubmitted;
    $this->status = $status;
    $this->repositoryLink = $repositoryLink;
  }

  public function getId()
  {
    return $this->id;
  }
  public function getStudentId()
  {
    return $this->studentId;
  }
  public function getBriefId()
  {
    return $this->briefId;
  }
  public function getDateSubmitted()
  {
    return $this->dateSubmitted;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function getRepositoryLink()
  {
    return $this->repositoryLink;
  }
}
