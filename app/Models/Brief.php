<?php
namespace App\Models;

class Brief
{
  private $id;
  private $title;
  private $description;
  private $startDate;
  private $endDate;
  private $sprintId;
  private $sprintName;

  public function __construct($title, $description, $startDate, $endDate, $sprintId, $id = null, $sprintName = null)
  {
    $this->id = $id;
    $this->title = $title;
    $this->description = $description;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
    $this->sprintId = $sprintId;
    $this->sprintName = $sprintName;
  }

  public function getId()
  {
    return $this->id;
  }
  public function getTitle()
  {
    return $this->title;
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
  public function getSprintId()
  {
    return $this->sprintId;
  }
  public function getDateDue()
  {
    return $this->endDate;
  }

  public function getSprintName()
  {
    return $this->sprintName;
    }
}
