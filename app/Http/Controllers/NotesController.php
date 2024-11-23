<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    public function store(Request $request)
    {
        if (auth()->user()->user_type != 0) {
            abort(404);
        }
        // Validate input data
        $request->validate([
            'note_name' => 'required|string|max:50',
            'note_content' => 'required|string|max:255',
            'application_id' => 'required|exists:applications,id',  // Ensure application_id is valid
        ]);

        // Create a new note with the application_id
        Notes::create([
            'name' => $request->note_name,
            'content' => $request->note_content,
            'application_id' => $request->application_id,  // Use the application ID from the form
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Note has been added successfully!');
    }

}
