<?php
namespace App\Mappers;

use App\Models\Link;

class LinkMapper
{
  public function toEntity(array $data): Link
  {
    return new Link(
      $data['url'],
      $data['type'], // e.g. 'video', 'article'
      $data['brief_id'],
      $data['id'] ?? null
    );
  }

  public function toDatabase(Link $link): array
  {
    return [
      'url' => $link->getUrl(),
      'type' => $link->getType(),
      'brief_id' => $link->getBriefId(),
      'id' => $link->getId()
    ];
  }
}
