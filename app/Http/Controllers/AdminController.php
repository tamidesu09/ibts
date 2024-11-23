<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }

        $genders = DB::table('applications')
            ->select('sex', DB::raw('COUNT(*) as count'))
            ->groupBy('sex')
            ->get();

        $gendersData = $genders->map(function ($item) {
            return [
                'name' => ucfirst($item->sex), // Capitalize the gender name
                'y' => $item->count,
            ];
        })->toArray();

        $jobTypes = DB::table('jobs')
            ->select('type', DB::raw('COUNT(*) as count'))
            ->groupBy('type')
            ->get();

        $jobTypeSeries = $jobTypes->map(function ($item) {
            return [
                'name' => ucfirst($item->type), // Job type name
                'y' => $item->count, // Count of jobs
                'drilldown' => ucfirst($item->type) // Drilldown identifier
            ];
        });

        $statuses = DB::table('applications')
            ->select('status', DB::raw('COUNT(*) as count'))
            ->groupBy('status')
            ->get();

        // Get all skills as a single array
        $skills = DB::table('applications')
            ->pluck('skills') // Retrieve the JSON column
            ->flatMap(function ($skills) {
                return json_decode($skills, true); // Decode each JSON string into an array
            });

        $skillCounts = $skills->countBy();

        $skillsData = $skillCounts->map(function ($count, $skill) {
            return [
                'name' => ucfirst($skill), // Capitalize the skill name
                'y' => $count, // Count of the skill
            ];
        })->values()->toArray();

        $parsedCounts = DB::table('applications') // Replace with your table name
            ->select(
                DB::raw('CASE WHEN is_parsed = 1 THEN "Parsed" ELSE "Not Parsed Yet" END as status'),
                DB::raw('count(*) as count')
            )
            ->groupBy('is_parsed') // Group by the custom 'status' name
            ->get();


        $jobCounts = DB::table('applications')
            ->join('jobs', 'applications.job_id', '=', 'jobs.id') // Join with jobs table on job_id
            ->select('jobs.title', DB::raw('count(*) as count')) // Select job title and count occurrences
            ->groupBy('applications.job_id', 'jobs.title') // Group by job_id and job title
            ->get();

        $jobCountSeries = $jobCounts->map(function ($item) {
            return [
                'name' => ucfirst($item->title), // Job type name
                'y' => $item->count, // Count of jobs
            ];
        });

        $feedbacksCount = DB::table('feedback')->count();

        $notesCount = DB::table('notes')->count();

        $activities = DB::table('activities')
            ->select('type', DB::raw('COUNT(*) as count'))
            ->groupBy('type')
            ->get();

        return view('admin.index', compact([
            'gendersData',
            'jobTypeSeries',
            'statuses',
            'skillsData',
            'parsedCounts',
            'jobCountSeries',
            'feedbacksCount',
            'notesCount',
            'activities'
        ]));
    }
}
