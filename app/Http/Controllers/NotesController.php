<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{

   public function store(Request $request)
{
    // Validate input data
    $request->validate([
        'note_name' => 'required|string|max:255',
        'note_content' => 'required|string',
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


public function show($applicationId)
{
    // Fetch the application by ID
    $application = Application::findOrFail($applicationId);

    // Retrieve all notes related to this application
    $notes = Notes::where('application_id', $applicationId)->get();

    // Check if notes are being fetched correctly
    if ($notes->isEmpty()) {
        // Optional: Log a message or add a default note
        // Log::info("No notes found for application ID: $applicationId");
    }

    // Pass the notes and application to the view
    return view('candidate.show', compact('application', 'notes'));
}

}
