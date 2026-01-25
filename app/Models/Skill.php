<?php
namespace App\Models;

class Skill
{
  private $id;
  private $code;
  private $title;
  private $description;
  private $level;
  private $niveau;
  private $briefId;

  public function __construct($code, $title, $description, $level, $niveau, $briefId = null, $id = null)
  {
    $this->id = $id;
    $this->code = $code;
    $this->title = $title;
    $this->description = $description;
    $this->level = $level;
    $this->niveau = $niveau;
    $this->briefId = $briefId;
  }

  public function getId()
  {
    return $this->id;
  }
  public function getCode()
  {
    return $this->code;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function getLevel()
  {
    return $this->level;
  }
  public function getNiveau()
  {
    return $this->niveau;
  }
  public function getBriefId()
  {
    return $this->briefId;
  }
}
