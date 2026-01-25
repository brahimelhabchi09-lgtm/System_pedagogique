<?php
namespace App\Controller;

use App\Services\BriefService;
use App\Services\SubmissionService;
use Core\Helpers\View;

class StudentController extends Controller
{
    private $briefService;
    private $submissionService;

    public function __construct()
    {
        $this->briefService = new BriefService();
        $this->submissionService = new SubmissionService();
    }

    public function index()
    {
        $briefs = $this->briefService->getAllBriefs();
        return $this->view("Student.dashboard", [
            "briefs" => $briefs
        ]);
    }

    public function submitWalkthrough()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $studentId = $_SESSION['user']['id'];
            $briefId = $_POST['brief_id'];
            $repositoryLink = $_POST['repository_link'];

            $data = [
                'student_id' => $studentId,
                'brief_id' => $briefId,
                'date_submitted' => date('Y-m-d H:i:s'),
                'status' => 'SUBMITTED',
                'repository_link' => $repositoryLink
            ];

            $this->submissionService->createSubmission($data);

            header("Location: /Student");
            exit;
        }
    }
}