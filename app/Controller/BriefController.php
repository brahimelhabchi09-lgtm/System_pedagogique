<?php
namespace App\Controller;

use App\Services\BriefService;
use App\Services\SprintService;

class BriefController extends Controller
{
  private $briefService;
  private $sprintService;

  public function __construct()
  {
    $this->briefService = new BriefService();
    $this->sprintService = new SprintService();
  }

  public function index()
  {
    $briefs = $this->briefService->getAllBriefs();
    return $this->view("Admin.briefs", ["briefs" => $briefs]);
  }

  public function addBrief()
  {
    $sprints = $this->sprintService->getAllSprints();
    return $this->view("Admin.addBrief", ["sprints" => $sprints]);
  }

  public function submitBrief()
  {
    $data = [
      "title" => $_POST["title"],
      "description" => $_POST["description"],
      "start_date" => $_POST["start_date"],
      "end_date" => $_POST["end_date"],
      "sprint_id" => $_POST["sprint_id"]
    ];

    $this->briefService->createBrief($data);

    header("Location: /admin/briefs");
    exit;
  }
}
