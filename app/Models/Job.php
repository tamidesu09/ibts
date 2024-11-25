<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Job
 *
 * @package App\Models
 */
class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'type',
        'description',
        'hours_start',
        'hours_end',
        'requirements',
        'questions'
    ];

    public function scopeGetAllJobs(Builder $builder)
    {
        $builder->where('deleted_at', null);
    }


    // In Job.php model
    public function applications()
    {
        return $this->hasMany(Application::class, 'job_id');
    }
}
