<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class FeedbackControllerTest extends TestCase
{
    /** @test */
    public function store_stores_feedback_when_valid_data_is_provided()
    {
        // Create a user with user_type = 1 (authorized user)
        $user = User::factory()->create(['user_type' => 1]);

        // Simulate authentication
        $this->actingAs($user);

        // Define valid data for feedback
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '1234567890',
            'message' => 'Great service, I am happy!',
        ];

        // Send a POST request to store feedback
        $response = $this->post(route('feedback.store'), $data);

        // Assert that the feedback is saved in the database
        $this->assertDatabaseHas('feedback', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '1234567890',
            'message' => 'Great service, I am happy!',
        ]);

        // Assert the redirect back with success message
        $response->assertRedirect();
        $response->assertSessionHas('success', 'Your feedback has been submitted successfully!');
    }

    /** @test */
    public function store_fails_when_required_fields_are_missing()
    {
        // Create a user with user_type = 1 (authorized user)
        $user = User::factory()->create(['user_type' => 1]);

        // Simulate authentication
        $this->actingAs($user);

        // Define invalid data (missing 'name' field)
        $data = [
            'email' => 'johndoe@example.com',
            'phone' => '1234567890',
            'message' => 'Great service!',
        ];

        // Send a POST request to store feedback
        $response = $this->post(route('feedback.store'), $data);

        // Assert that validation fails (missing 'name' field)
        $response->assertSessionHasErrors('name');
    }

    /** @test */
    public function store_aborts_if_user_type_is_not_1()
    {
        // Create a user with user_type = 0 (unauthorized user)
        $user = User::factory()->create(['user_type' => 0]);

        // Simulate authentication
        $this->actingAs($user);

        // Define valid data for feedback
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '1234567890',
            'message' => 'Great service!',
        ];

        // Send a POST request to store feedback
        $response = $this->post(route('feedback.store'), $data);

        // Assert that the response is 404 (user type not 1)
        $response->assertStatus(404);
    }
}
