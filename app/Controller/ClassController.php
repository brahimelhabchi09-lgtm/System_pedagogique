<?php
namespace App\Controller;

use App\Services\TeacherService;
use App\Models\Classe;
use App\Repositories\ClassRepository;

class ClassController extends Controller
{
  private $classRepository;
  private $teacherService;

  public function __construct()
  {
    $this->classRepository = new ClassRepository();
    $this->teacherService = new TeacherService();
  }

  public function index()
  {
    $classes = $this->classRepository->findAll();
    return $this->view("Admin.classes", ["classes" => $classes]);
  }

  public function createClass()
  {
    $teachers = $this->teacherService->getAllTeachers();
    return $this->view("Admin.createClass", ["teachers" => $teachers]);
  }

  public function submitClass()
  {
    $data = [
      'name' => $_POST['name'],
      'formation' => $_POST['formation'],
      'grade' => $_POST['grade'],
      'school_year' => $_POST['school_year'],
      'teacher_id' => $_POST['teacher_id']
    ];

    $classe = new Classe(
      $data['name'],
      $data['formation'],
      $data['grade'],
      $data['school_year'],
      $data['teacher_id']
    );

    $this->classRepository->create($classe);

    header("Location: /admin/classes");
    exit;
  }
}
