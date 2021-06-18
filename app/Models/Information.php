<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string address
 * @property string phone
 * @property string city
 * @property integer user_id
 * @property User user
 * Class Information
 * @package App\Models
 */
class Information extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'phone', 'city', 'user_id'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
