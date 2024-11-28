<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOrUpdateAnnouncement;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index()

    {
        if (auth()->user()->is_owner == false) {
            abort(404);
        }

        $announcements = Announcement::all();

        return view('announcements.index', compact('announcements'));
    }

    public function create()
    {
        if (auth()->user()->is_owner == false) {
            abort(404);
        }

        return view('announcements.create');
    }

    public function store(CreateOrUpdateAnnouncement $request)
    {
        if (auth()->user()->is_owner == false) {
            abort(404);
        }

        $validated = $request->validated();
        Announcement::create($validated);

        return redirect()->back()->with('success', 'Announcement has been created successfully');
    }

    public function edit(Announcement $announcement)
    {
        if (auth()->user()->is_owner == false) {
            abort(404);
        }

        return view('announcements.edit', compact('announcement'));
    }

    public function update(Announcement $announcement, CreateOrUpdateAnnouncement $request)
    {
        if (auth()->user()->is_owner == false) {
            abort(404);
        }

        $validated = $request->validated();
        $announcement->update($validated);

        return redirect()->back()->with('success', 'Announcement has been updated successfully');
    }

    public function destroy() {}
}
