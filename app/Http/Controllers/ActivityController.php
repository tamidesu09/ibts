<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityStoreRequest;
use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Applications;

class ActivityController extends Controller
{
    public function index()
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }
        $activities = Activity::all();
        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }

        $attendees = Applications::select('complete_name', 'email', 'user_id')
            ->distinct()
            ->get();

        return view('activities.create', compact('attendees'));
    }

    public function store(ActivityStoreRequest $request)
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }

        $validatedData = $request->validated();

        Activity::create($validatedData);

        return back()->with('success', 'Activity created successfully');
    }
}
