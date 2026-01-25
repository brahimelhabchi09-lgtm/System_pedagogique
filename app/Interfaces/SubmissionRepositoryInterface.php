<?php
namespace App\Interfaces;

use App\Models\Submission;

interface SubmissionRepositoryInterface
{
  public function create(Submission $submission);
  public function findAll();
}
