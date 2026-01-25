<?php
namespace App\Controller;

use App\Services\BriefService;
use App\Services\StudentService;
use App\Services\SprintService;
use App\Services\SubmissionService;
use App\Repositories\DebriefingRepository;

class FormateurController extends Controller
{
    private $briefService;
    private $studentService;
    private $sprintService;
    private $debriefingRepo;
    private $submissionService;

    public function __construct()
    {
        $this->briefService = new BriefService();
        $this->studentService = new StudentService();
        $this->sprintService = new SprintService();
        $this->debriefingRepo = new DebriefingRepository();
        $this->submissionService = new SubmissionService();
    }

    public function index()
    {
        $teacherId = $_SESSION['user']['id'] ?? null;
        $briefs = $this->briefService->getAllBriefs();

        if ($teacherId) {
            $students = $this->studentService->getStudentsByTeacher($teacherId);
        } else {
            $students = []; // Or redirect/error
        }

        $sprints = $this->sprintService->getAllSprints();
        $submissions = $this->submissionService->getAllSubmissionsWithDetails();

        return $this->view("Formateur.dashboard", [
            "briefs" => $briefs,
            "students" => $students,
            "sprints" => $sprints,
            "submissions" => $submissions
        ]);
    }

    public function students()
    {
        $teacherId = $_SESSION['user']['id'] ?? null;
        $students = $this->studentService->getStudentsByTeacher($teacherId);

        return $this->view("Formateur.students", [
            "students" => $students
        ]);
    }

    public function studentDetails()
    {
        $id = $_GET['id'] ?? null;
        $student = $this->studentService->getStudentById($id);
        if (!$student) {
            die("Student not found");
        }

        $evaluations = $this->debriefingRepo->findByStudent($id);

        return $this->view("Formateur.studentPortfolio", [
            "student" => $student,
            "evaluations" => $evaluations
        ]);
    }

    public function addStudent()
    {
        return $this->view("Formateur.addStudent");
    }

    public function submitStudent()
    {
        $data = [
            "first_name" => $_POST["first_name"],
            "last_name" => $_POST["last_name"],
            "email" => $_POST["email"],
            "password" => $_POST["password"],
            "phone" => $_POST["phone"] ?? null,
            "age" => $_POST["age"] ?? null,
        ];

        $this->studentService->createStudent($data);

        header("Location: /Formateur");
        exit;
    }
}