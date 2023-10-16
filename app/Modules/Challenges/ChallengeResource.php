<?php

declare(strict_types=1);

namespace App\Modules\Challenges;

use App\Models\Challenge;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Challenge $resource
 */
class ChallengeResource extends JsonResource
{
    public function __construct(Challenge $resource)
    {
        parent::__construct($resource);
    }

    public function toArray($request): array
    {
        if ($this->resource === null) {
            return [];
        }

        return [
            'name' => $this->resource->name,
            'description' => $this->resource->description,
        ];
    }
}
