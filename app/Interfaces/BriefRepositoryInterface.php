<?php
namespace App\Interfaces;

use App\Models\Brief;

interface BriefRepositoryInterface
{
  public function create(Brief $brief);
  public function findAll();
}
