<?php
namespace App\Services;

use App\Models\Link;
use App\Repositories\LinkRepository;

class LinkService
{
  private $linkRepository;

  public function __construct()
  {
    $this->linkRepository = new LinkRepository();
  }

  public function addLink(array $data)
  {
    $link = new Link(
      $data['url'],
      $data['type'],
      $data['brief_id']
    );
    $this->linkRepository->create($link);
  }

  public function getLinksForBrief($briefId)
  {
    return $this->linkRepository->findAllByBriefId($briefId);
  }
}
