<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Applications;



class NoteControllerTest extends TestCase
{
    /** @test */
    public function store_creates_note_when_valid_data_is_provided()
    {
        // Create a user with user_type = 0 (authorized user)
        $user = User::factory()->create(['user_type' => 0]);

        // Create a sample application
        $application = Applications::factory()->create();

        // Simulate authentication
        $this->actingAs($user);

        // Define valid note data
        $data = [
            'note_name' => 'Important Note',
            'note_content' => 'This is an important note.',
            'application_id' => $application->id,
        ];

        // Send POST request to store the note
        $response = $this->post(route('notes.store'), $data);

        // Assert that the note is saved in the database
        $this->assertDatabaseHas('notes', [
            'name' => 'Important Note',
            'content' => 'This is an important note.',
            'application_id' => $application->id,
        ]);

        // Assert the redirect back with success message
        $response->assertRedirect();
        $response->assertSessionHas('success', 'Note has been added successfully!');
    }

    /** @test */
    public function store_fails_when_required_fields_are_missing()
    {
        // Create a user with user_type = 0 (authorized user)
        $user = User::factory()->create(['user_type' => 0]);

        // Create a sample application
        $application = Applications::factory()->create();

        // Simulate authentication
        $this->actingAs($user);

        // Define invalid data (missing 'note_name' field)
        $data = [
            'note_content' => 'This is an important note.',
            'application_id' => $application->id,
        ];

        // Send POST request to store the note
        $response = $this->post(route('notes.store'), $data);

        // Assert that validation failed (missing 'note_name' field)
        $response->assertSessionHasErrors('note_name');
    }

    /** @test */
    public function store_aborts_if_user_type_is_not_0()
    {
        // Create a user with user_type = 1 (unauthorized user)
        $user = User::factory()->create(['user_type' => 1]);

        // Simulate authentication
        $this->actingAs($user);

        // Define valid note data
        $data = [
            'note_name' => 'Important Note',
            'note_content' => 'This is an important note.',
            'application_id' => 1, // Assuming an existing application with ID 1
        ];

        // Send POST request to store the note
        $response = $this->post(route('notes.store'), $data);

        // Assert that the response is 404 (unauthorized user)
        $response->assertStatus(404);
    }
}
