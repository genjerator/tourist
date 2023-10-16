<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $round_id
 * Relations:
 * @property-read User $user
 * @property-read Round $round
 */
class Challenge extends Model
{
    use HasFactory;

    protected int $user_id;
    protected int $round_id;
    protected Round $round;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'active', 'created_at', 'updated_at', 'round_id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function round(): BelongsTo
    {
        return $this->belongsTo(Round::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('is_active')->withTimestamps();
    }
    public function activeUsers()
    {
        return $this->belongsToMany(User::class)
            ->as('active_user')
            ->wherePivot('is_active',1)->withTimestamps();
    }
    public function rules()
    {
        return $this->hasMany(Rules::class, 'challenge_id');
    }
}
