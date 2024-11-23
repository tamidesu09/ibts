<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
    // Validate and store feedback data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string',
        'message' => 'required|string',
    ]);

    Feedback::create($request->validated());

    // Set success message
    return redirect()->back()->with('success', 'Your feedback has been submitted successfully!');
}

    public function index()
    {
        // Retrieve all feedback records
        $feedbacks = Feedback::paginate(3);

        return view('feedback.index', compact('feedbacks'));
    }

    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return redirect()->route('feedback.index')->with('success', 'Feedback deleted successfully.');
    }

}
