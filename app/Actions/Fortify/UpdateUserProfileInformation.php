<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'dob' => ['nullable', 'date'],
            'profile_picture' => 'required|mimes:jpg,jpeg,png|max:10240',
        ])->validateWithBag('updateProfileInformation');

        // Handle file upload and move it to the public path
        if (isset($input['profile_picture'])) {
            $profilePicture = $input['profile_picture'];
            $profilePicturePath = $this->uploadProfilePicture($profilePicture);
        }

        // Check if the email has changed for verified users
        if (
            $input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail
        ) {
            $this->updateVerifiedUser($user, $input);
        } else {
            // Update the user details and save the path to the profile picture
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'profile_picture' => isset($profilePicturePath) ? $profilePicturePath : $user->profile_picture,
            ])->save();
        }
    }

    /**
     * Handle the upload of the profile picture and move it to the public directory.
     *
     * @param  \Illuminate\Http\UploadedFile  $file
     * @return string  Path of the uploaded file
     */
    protected function uploadProfilePicture($file)
    {
        // Generate a unique filename using the original name
        $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();

        // Define the directory where the file will be moved
        $destinationPath = public_path('profile_pictures');

        // Ensure the directory exists, create if not
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0775, true);
        }

        // Move the file to the public directory
        $file->move($destinationPath, $filename);

        // Return the relative path where the file is stored
        return 'profile_pictures/' . $filename;
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
