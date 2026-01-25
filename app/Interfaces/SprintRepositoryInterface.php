<?php
namespace App\Interfaces;

use App\Models\Sprint;

interface SprintRepositoryInterface
{
  public function create(Sprint $sprint);
  public function findAll();
}
