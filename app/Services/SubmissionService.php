<?php
namespace App\Services;

use App\Models\Submission;
use App\Repositories\SubmissionRepository;

class SubmissionService
{
  private $submissionRepository;

  public function __construct()
  {
    $this->submissionRepository = new SubmissionRepository();
  }

  public function createSubmission(array $data)
  {
    $submission = new Submission(
      $data['student_id'],
      $data['brief_id'],
      $data['date_submitted'],
      $data['status'],
      $data['repository_link']
    );
    $this->submissionRepository->create($submission);
  }

  public function getAllSubmissions()
  {
    return $this->submissionRepository->findAll();
  }

  public function getAllSubmissionsWithDetails()
  {
    return $this->submissionRepository->findAllWithDetails();
  }
}
