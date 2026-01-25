<?php
namespace App\Models;

class Sprint
{
  private $id;
  private $name;
  private $description;
  private $startDate;
  private $endDate;

  public function __construct($name, $description, $startDate, $endDate, $id = null)
  {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
  }

  public function getId()
  {
    return $this->id;
  }
  public function getName()
  {
    return $this->name;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
}
