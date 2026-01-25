<?php
namespace App\Controller;

use App\Services\TeacherService;
use App\Services\StudentService;
use App\Services\SprintService;

class AdminController extends Controller
{

    private $teacherService;
    private $studentService;
    private $sprintService;

    public function __construct()
    {
        $this->teacherService = new TeacherService();
        $this->studentService = new StudentService();
        $this->sprintService = new SprintService();
    }

    public function index()
    {
        $teachers = $this->teacherService->getAllTeachers();
        $students = $this->studentService->getAllStudents();
        $sprints = $this->sprintService->getAllSprints();

        return $this->view("Admin.dashboard", [
            "teachers" => $teachers,
            "students" => $students,
            "sprints" => $sprints
        ]);
    }
    public function addFormateur()
    {
        return $this->view("Admin.addFormateur");
    }
    public function submitFormateur()
    {
        $data = [
            "first_name" => $_POST["first_name"],
            "last_name" => $_POST["last_name"],
            "email" => $_POST["email"],
            "password" => $_POST["password"],
            "phone" => $_POST["phone"] ?? null,
            "age" => $_POST["age"] ?? null,
            "role" => $_POST["role"] ?? 'TEACHER'
        ];

        $this->teacherService->createTeacher($data);

        header("Location: /admin");
        exit;
    }

    public function addStudent()
    {
        return $this->view("Admin.addStudent");
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
            // Role is handled by service/model
        ];

        $this->studentService->createStudent($data);

        header("Location: /admin");
        exit;
    }

    public function createSprint()
    {
        return $this->view("Admin.createSprint");
    }
    public function submitSprint()
    {
        $data = [
            "name" => $_POST["name"],
            "description" => $_POST["description"],
            "start_date" => $_POST["start_date"],
            "end_date" => $_POST["end_date"]
        ];

        $this->sprintService->createSprint($data);

        header("Location: /admin");
        exit;
    }
    public function sprintManagement()
    {
        // Optional: Pass sprints to view if needed.
        // $sprints = $this->sprintService->getAllSprints();
        return $this->view("Admin.sprintManagement");
    }
}