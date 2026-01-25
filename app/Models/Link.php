<?php
namespace App\Models;

class Link
{
  private $id;
  private $url;
  private $type;
  private $briefId; // Assuming links belong to briefs as resources

  public function __construct($url, $type, $briefId, $id = null)
  {
    $this->id = $id;
    $this->url = $url;
    $this->type = $type;
    $this->briefId = $briefId;
  }

  public function getId()
  {
    return $this->id;
  }
  public function getUrl()
  {
    return $this->url;
  }
  public function getType()
  {
    return $this->type;
  }
  public function getBriefId()
  {
    return $this->briefId;
  }
}
