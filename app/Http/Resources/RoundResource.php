<?php

namespace App\Http\Resources;


use App\Models\Round;
use Illuminate\Http\Resources\Json\JsonResource;

class RoundResource extends JsonResource
{
    public static $wrap = '';
    public function __construct(Round $resource)
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
        /** @var Round $round */
        $round = $this->resource;
        return [
            'id' => $round->id,
            'name' => $round->name,
            'description' => $round->description,
            'active' => $round->active,
            'date_start' => $round->date_start,
            'date_end' => $round->date_end,
            'created_at' => $round->created_at,
            'updated_at' => $round->updated_at,
            'challenges'=> ChallengeResource::collection($round->challenges),
        ];
    }
}
