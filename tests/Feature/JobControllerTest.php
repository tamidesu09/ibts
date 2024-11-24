<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Job;



class JobControllerTest extends TestCase
{
    /** @test */
    public function store_creates_job_when_valid_data_is_provided()
    {
        // Create a user with user_type = 0 (authorized user)
        $user = User::factory()->create(['user_type' => 0]);

        // Simulate authentication
        $this->actingAs($user);

        // Define valid job data
        $data = [
            'title' => 'Software Engineer',
            'type' => 'Full-time',
            'description' => 'Develop and maintain software applications.',
            'hours_start' => '9:00',
            'hours_end' => '18:00',
            'requirements' => 'PHP, Laravel, MySQL',
        ];

        // Send POST request to store a job
        $response = $this->post(route('jobs.store'), $data);

        // Assert that the job is saved in the database
        $this->assertDatabaseHas('jobs', [
            'title' => 'Software Engineer',
            'type' => 'Full-time',
            'description' => 'Develop and maintain software applications.',
            'hours_start' => '9:00',
            'hours_end' => '18:00',
            'requirements' => json_encode(['PHP', 'Laravel', 'MySQL']),
        ]);

        // Assert the redirect back with success message
        $response->assertRedirect();
        $response->assertSessionHas('success', 'Job has been created successfully.');
    }

    /** @test */
    public function store_fails_when_required_fields_are_missing()
    {
        // Create a user with user_type = 0 (authorized user)
        $user = User::factory()->create(['user_type' => 0]);

        // Simulate authentication
        $this->actingAs($user);

        // Define invalid data (missing 'title' field)
        $data = [
            'type' => 'Full-time',
            'description' => 'Develop software',
            'hours_start' => '9:00',
            'hours_end' => '18:00',
            'requirements' => 'PHP, Laravel',
        ];

        // Send POST request to store a job
        $response = $this->post(route('jobs.store'), $data);

        // Assert that the validation failed (missing 'title' field)
        $response->assertSessionHasErrors('title');
    }

    /** @test */
    public function update_updates_job_when_valid_data_is_provided()
    {
        // Create a user with user_type = 0 (authorized user)
        $user = User::factory()->create(['user_type' => 0]);

        // Simulate authentication
        $this->actingAs($user);

        // Create an existing job to update
        $job = Job::factory()->create([
            'title' => 'Software Engineer',
            'type' => 'Full-time',
            'description' => 'Develop applications',
            'hours_start' => '9:00',
            'hours_end' => '17:00',
            'requirements' => json_encode(['PHP', 'Laravel']),
        ]);

        // Define updated job data
        $data = [
            'title' => 'Senior Software Engineer',
            'type' => 'Full-time',
            'description' => 'Develop and maintain advanced applications.',
            'hours_start' => '10:00',
            'hours_end' => '19:00',
            'requirements' => 'PHP, Laravel, MySQL, Docker',
        ];

        // Send PUT request to update the job
        $response = $this->put(route('jobs.update', $job->id), $data);

        // Assert that the job data is updated in the database
        $this->assertDatabaseHas('jobs', [
            'id' => $job->id,
            'title' => 'Senior Software Engineer',
            'type' => 'Full-time',
            'description' => 'Develop and maintain advanced applications.',
            'hours_start' => '10:00',
            'hours_end' => '19:00',
            'requirements' => json_encode(['PHP', 'Laravel', 'MySQL', 'Docker']),
        ]);

        // Assert the redirect with success message
        $response->assertRedirect(route('jobs.index'));
        $response->assertSessionHas('success', 'Job has been updated successfully.');
    }

    /** @test */
    public function destroy_deletes_job()
    {
        // Create a user with user_type = 0 (authorized user)
        $user = User::factory()->create(['user_type' => 0]);

        // Simulate authentication
        $this->actingAs($user);

        // Create a job to delete
        $job = Job::factory()->create([
            'title' => 'Software Engineer',
            'type' => 'Full-time',
            'description' => 'Develop and maintain software applications.',
            'hours_start' => '9:00',
            'hours_end' => '18:00',
            'requirements' => json_encode(['PHP', 'Laravel', 'MySQL']),
        ]);

        // Send DELETE request to destroy the job
        $response = $this->delete(route('jobs.destroy', $job));

        // Assert that the job is deleted from the database
        $this->assertDatabaseMissing('jobs', ['id' => $job]);

        // Assert the redirect with success message
        $response->assertRedirect(route('jobs.index'));
        $response->assertSessionHas('success', 'Job has been deleted successfully.');
    }
}
