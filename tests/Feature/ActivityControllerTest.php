<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ActivityControllerTest extends TestCase
{
    /** @test */
    public function store_creates_activity_for_admin_user_type_0()
    {
        // Create a user with user_type = 0 (admin)
        $user = User::factory()->create(['user_type' => 0]);

        // Simulate authentication
        $this->actingAs($user);

        // Prepare the valid data to be sent in the request
        $data = [
            'title' => 'Test Activity',  // Required: Activity title
            'type' => 'Call',            // Required: Type of the activity (Call, Meeting, Email, Interview)
            'date' => '2024-11-25',      // Required: Date in the correct format (Y-m-d)
            'hours_start' => '09:00:00', // Required: Start time of the activity
            'hours_end' => '10:00:00',   // Required: End time of the activity
            'location' => 'Test Location', // Nullable: Location of the activity
            'description' => 'Description of the activity', // Required: Description
            'url' => 'https://example.com', // Nullable: URL associated with the activity
            'user_id' => $user->id,      // Required: ID of the user associated with the activity
        ];

        // Visit the store route (POST request)
        $response = $this->post(route('activities.store'), $data);

        // Assert that the activity was created in the database
        $this->assertDatabaseHas('activities', [
            'title' => 'Test Activity',
            'type' => 'Call',
            'date' => '2024-11-25',
            'hours_start' => '09:00:00',
            'hours_end' => '10:00:00',
            'location' => 'Test Location',
            'description' => 'Description of the activity',
            'url' => 'https://example.com',
            'user_id' => $user->id,
        ]);

        // Assert that the user is redirected back with a success message
        $response->assertRedirect();
        $response->assertSessionHas('success', 'Activity created successfully');
    }


    /** @test */
    public function store_returns_404_for_non_admin_user_type_not_0()
    {
        // Create a user with user_type != 0 (non-admin)
        $user = User::factory()->create(['user_type' => 1]);

        // Simulate authentication
        $this->actingAs($user);

        // Prepare the data to be sent in the request
        $data = [
            'title' => 'Test Activity',  // Required: Activity title
            'type' => 'Call',            // Required: Type of the activity (Call, Meeting, Email, Interview)
            'date' => '2024-11-25',      // Required: Date in the correct format (Y-m-d)
            'hours_start' => '09:00:00', // Required: Start time of the activity
            'hours_end' => '10:00:00',   // Required: End time of the activity
            'location' => 'Test Location', // Nullable: Location of the activity
            'description' => 'Description of the activity', // Required: Description
            'url' => 'https://example.com', // Nullable: URL associated with the activity
            'user_id' => $user->id,      // Required: ID of the user associated with the activity
        ];

        // Visit the store route (POST request)
        $response = $this->post(route('activities.store'), $data);

        // Assert that the response is a 404 error
        $response->assertStatus(404);
    }

    /** @test */
    public function store_returns_validation_error_for_invalid_data()
    {
        // Create a user with user_type = 0 (admin)
        $user = User::factory()->create(['user_type' => 0]);

        // Simulate authentication
        $this->actingAs($user);

        // Prepare invalid data (e.g., missing title and invalid type)
        $data = [
            'title' => '',               // Invalid: Title is required
            'type' => 'InvalidType',      // Invalid: Type must be one of Call, Meeting, Email, Interview
            'date' => 'invalid-date',     // Invalid: Date should be a valid date
            'hours_start' => '',          // Invalid: Start time is required
            'hours_end' => '',            // Invalid: End time is required
            'location' => 'Test Location',
            'description' => 'Test',      // Valid: Description
            'url' => 'https://example.com',
            'user_id' => 9999,            // Invalid: user_id does not exist
        ];

        // Visit the store route (POST request)
        $response = $this->post(route('activities.store'), $data);

        // Assert that the response contains validation errors
        $response->assertSessionHasErrors(['title', 'type', 'date', 'hours_start', 'hours_end', 'user_id']);
    }
}
