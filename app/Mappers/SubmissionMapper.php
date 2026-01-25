<?php
namespace App\Mappers;

use App\Models\Submission;

class SubmissionMapper
{
  public function toEntity(array $data): Submission
  {
    return new Submission(
      $data['student_id'],
      $data['brief_id'],
      $data['date_submitted'],
      $data['status'],
      $data['repository_link'],
      $data['id'] ?? null
    );
  }

  public function toDatabase(Submission $submission): array
  {
    return [
      'student_id' => $submission->getStudentId(),
      'brief_id' => $submission->getBriefId(),
      'date_submitted' => $submission->getDateSubmitted(),
      'status' => $submission->getStatus(),
      'repository_link' => $submission->getRepositoryLink(),
      'id' => $submission->getId()
    ];
  }
}
