<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;


class ApplicationControllerTest extends TestCase
{

    /** @test */
    public function store_creates_application_for_user_type_1_with_valid_data()
    {
        // Create a user with user_type = 1
        $user = User::factory()->create(['user_type' => 1]);

        // Simulate authentication
        $this->actingAs($user);

        $cv = UploadedFile::fake()->create('cv.pdf', 1024); // Fake a PDF file
        $data = [
            'job_id' => 1,             // Valid job_id
            'phone_number' => '1234567890',  // Valid phone number
            'sex' => 'Male',           // Valid sex
            'cv' => $cv                // Valid CV file
        ];

        // Visit the store route (POST request)
        $response = $this->post(route('applications.store'), $data);

        // Assert that the application was created in the database
        $this->assertDatabaseHas('applications', [
            'job_id' => 1,
            'complete_name' => $user->name,
            'email' => $user->email,
            'phone_number' => '1234567890',
            'sex' => 'Male',
            'user_id' => $user->id,
        ]);

        $cvPath = 'cvs/' . md5(now()) . '_' . $cv->getClientOriginalName();

        // Assert that the user is redirected back with a success message
        $response->assertRedirect();
        $response->assertSessionHas('success', 'Application submitted successfully.');
    }

    /** @test */
    public function store_returns_error_for_invalid_phone_number()
    {
        // Create a user with user_type = 1
        $user = User::factory()->create(['user_type' => 1]);

        // Simulate authentication
        $this->actingAs($user);

        // Prepare invalid data: invalid phone number (too long)
        $data = [
            'job_id' => 1,
            'phone_number' => '1234567890123456',  // Invalid phone number (too long)
            'sex' => 'Male',
            'cv' => UploadedFile::fake()->create('cv.pdf', 1024),  // Valid CV
        ];

        // Visit the store route (POST request)
        $response = $this->post(route('applications.store'), $data);

        // Assert that the response contains validation errors for the phone_number
        $response->assertSessionHasErrors('phone_number');
    }

    /** @test */
    public function store_returns_error_for_invalid_sex_value()
    {
        // Create a user with user_type = 1
        $user = User::factory()->create(['user_type' => 1]);

        // Simulate authentication
        $this->actingAs($user);

        // Prepare invalid data: invalid sex value
        $data = [
            'job_id' => 1,
            'phone_number' => '1234567890',
            'sex' => 'InvalidSex',  // Invalid sex value
            'cv' => UploadedFile::fake()->create('cv.pdf', 1024),  // Valid CV
        ];

        // Visit the store route (POST request)
        $response = $this->post(route('applications.store'), $data);

        // Assert that the response contains validation errors for the sex field
        $response->assertSessionHasErrors('sex');
    }

    /** @test */
    public function store_returns_error_for_invalid_file_type()
    {
        // Create a user with user_type = 1
        $user = User::factory()->create(['user_type' => 1]);

        // Simulate authentication
        $this->actingAs($user);

        // Prepare invalid data: invalid sex value
        $data = [
            'job_id' => 1,
            'phone_number' => '1234567890',
            'sex' => 'male',  // Invalid sex value
            'cv' => UploadedFile::fake()->create('cv.docx', 1024),  // Invalid CV
        ];

        // Visit the store route (POST request)
        $response = $this->post(route('applications.store'), $data);

        // Assert that the response contains validation errors for the sex field
        $response->assertSessionHasErrors('cv');
    }
}
