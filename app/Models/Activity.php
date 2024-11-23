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
        'attendee',
        'description',
        'application_id',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id');
    }
}
