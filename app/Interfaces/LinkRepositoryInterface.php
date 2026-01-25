<?php
namespace App\Interfaces;

use App\Models\Link;

interface LinkRepositoryInterface
{
  public function create(Link $link);
  public function findAllByBriefId($briefId);
}
