<?php
namespace App\Controller;

use App\Models\Skill;
use App\Repositories\SkillRepository;
use App\Services\BriefService;

class SkillController extends Controller
{
  private $skillRepository;
  private $briefService;

  public function __construct()
  {
    $this->skillRepository = new SkillRepository();
    $this->briefService = new BriefService();
  }

  public function index()
  {
    $skills = $this->skillRepository->findAll();
    return $this->view("Admin.skills", ["skills" => $skills]);
  }

  public function createSkill()
  {
    // Skills might be linked to Briefs, so fetch Briefs
    $briefs = $this->briefService->getAllBriefs();
    return $this->view("Admin.createSkill", ["briefs" => $briefs]);
  }

  public function submitSkill()
  {
    $data = [
      'code' => $_POST['code'],
      'title' => $_POST['title'],
      'description' => $_POST['description'],
      'level' => $_POST['level'], // IMITER, S_ADAPTER, TRANSPOSER
      'niveau' => $_POST['niveau'] ?? 'FAIBLE', // FAIBLE, MOYENNE, TRES_BIEN
      'brief_id' => !empty($_POST['brief_id']) ? $_POST['brief_id'] : null
    ];

    $skill = new Skill(
      $data['code'],
      $data['title'],
      $data['description'],
      $data['level'],
      $data['niveau'],
      $data['brief_id']
    );

    $this->skillRepository->create($skill);

    header("Location: /admin/skills");
    exit;
  }
}
