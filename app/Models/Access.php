<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

/**
 * @property string email
 * @property string job_position
 * @property string token
 * @property int creator_id
 * @property User creator
 * Class Access
 * @package App\Models
 */
class Access extends Model
{
    use HasFactory, Notifiable;

    /**
     * @var string[] $fillable
     */
    protected $fillable = ['email', 'job_position', 'token', 'user_id'];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
