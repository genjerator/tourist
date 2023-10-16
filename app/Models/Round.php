<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;

/**
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property bool $active
 * @property \Illuminate\Support\Carbon $date_start
 * @property \Illuminate\Support\Carbon $date_end
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *  * Relations:
 * Relations:
 * @property-read Collection|Challenge[] $challenges
 */
class Round extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'active', 'date_start', 'date_end', 'created_at', 'updated_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
        'date_start' => 'datetime',
        'date_end' => 'datetime',
    ];

    /**
     * Get the challenges associated with the round.
     */
    public function challenges(): HasMany
    {
        return $this->hasMany(Challenge::class);
    }

    public function rules(): HasManyThrough
    {
        return $this->hasManyThrough(Rule::class, Challenge::class);
    }

    public static function latestActive()
    {
        return static::where('active', true)
            ->latest()
            ->first();
    }

}
