<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    /** @use HasFactory<\Database\Factories\ChirpFactory> */
    use HasFactory;
    /**
     * A Chirp belongs to a User
     *
     * @return BelongsTo
     */
    protected $fillable = [
        'message',
    ];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
