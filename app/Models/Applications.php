<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;

    protected $fillable = [
        'complete_name', // Complete Name (FN, MI, S)
        'email',         // Email Address
        'phone_number',  // Phone Number
        'sex',           // Sex (Optional)
        'cv_path',       // Attach Your CV (Path to stored file)
        'job_id'         // Job ID foreign key
    ];


    // In Application.php model
    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    // Define the relationship with Activity
    public function activities()
    {
        return $this->hasMany(Activity::class, 'application_id');
    }
}
