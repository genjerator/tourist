<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $value
 * @property int $point_type_id
 * @property int $challenge_id
 * Relations:
 * @property-read PointType $pointType
 */
class Point extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['value'];

    public function challenge(): BelongsTo
    {
        return $this->belongsTo(Challenge::class);
    }

    /**
     * Get the point type associated with the point.
     */
    public function pointType(): BelongsTo
    {
        return $this->belongsTo(PointType::class);
    }
}
