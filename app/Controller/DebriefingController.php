<?php
namespace App\Controller;

use App\Repositories\DebriefingRepository;
use App\Models\Evaluation;
use App\Repositories\StudentRepository;
use App\Services\BriefService; // Using Service or Repo? Service usually.
use App\Repositories\SkillRepository; // Direct Repo usage or Service?
use Core\Database\Database;

class DebriefingController extends Controller
{
  private $debriefingRepo;
  private $studentRepo;

  // Quick fix: direct DB calls or Repo for Brief/Skill fetching if Service missing specific methods
  // Assuming we can fetch Brief and its Skills.

  public function __construct()
  {
    $this->debriefingRepo = new DebriefingRepository();
    $this->studentRepo = new StudentRepository();
  }

  public function create()
  {
    // View Form: Needs List of Students, List of Briefs?
    // Or "Select Brief" -> "Select Student" -> "Rate".
    // Let's make a simple view where Teacher selects Sprint -> Brief -> Student.
    // For MVP, just "Evaluate Student on Brief".

    // Let's pass all students and all briefs to the view.
    // We need BriefRepository to fetch briefs.

    // Fetch all students (TEACHER needs to see this)
    $students = $this->studentRepo->findAll();

    // Fetch all briefs
    $query = "SELECT * FROM brief";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute();
    $briefs = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $selectedStudentId = $_GET['student_id'] ?? null;

    return $this->view("Formateur.evaluate", [
      "students" => $students,
      "briefs" => $briefs,
      "selectedStudentId" => $selectedStudentId
    ]);
  }

  public function fetchSkills()
  {
    // API endpoint to get skills for a brief?
    // Or just reload page?
    // JSON response for AJAX would be best.
    header('Content-Type: application/json');

    if (!isset($_GET['brief_id'])) {
      echo json_encode([]);
      exit;
    }

    $briefId = $_GET['brief_id'];
    $query = "SELECT * FROM skill WHERE brief_id = :brief_id";
    $stmt = Database::getConnection()->prepare($query);
    $stmt->execute([':brief_id' => $briefId]);
    $skills = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    echo json_encode($skills);
    exit;
  }

  public function store()
  {
    // $_POST: student_id, brief_id, skills[skill_id] = level, comments[skill_id] = text
    if (!isset($_POST['student_id'], $_POST['evaluations'])) {
      // Handle error
      die("Missing data");
    }

    $studentId = $_POST['student_id'];
    $evaluations = $_POST['evaluations']; // Array: skill_id => [level => ..., comment => ...]

    foreach ($evaluations as $skillId => $data) {
      $eval = new Evaluation(
        $studentId,
        $skillId,
        $data['level'],
        $data['comment'] ?? ''
      );
      $this->debriefingRepo->create($eval);
    }

    header("Location: /Formateur/student?id=" . $studentId);
    exit;
  }

  public function invalidate()
  {
    if (isset($_GET['id'])) {
      $this->debriefingRepo->delete($_GET['id']);
    }

    $returnUrl = $_SERVER['HTTP_REFERER'] ?? '/Formateur';
    header("Location: " . $returnUrl);
    exit;
  }
}
