<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'date',
        'hours_start',
        'hours_end',
        'location',
        'description',
        'url',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
