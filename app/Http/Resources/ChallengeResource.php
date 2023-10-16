<?php

namespace App\Http\Resources;

use App\Models\Challenge;
use Illuminate\Http\Resources\Json\JsonResource;

class ChallengeResource extends JsonResource
{
    public static $wrap = '';
    public function __construct(Challenge $resource)
    {
        parent::__construct($resource);
    }
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->name,
            'description' => $this->description,
            'active' => $this->active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'round_id' => $this->round_id,

        ];
    }
}
