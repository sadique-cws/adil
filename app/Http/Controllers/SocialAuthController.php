<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $allowedEmails = ['dildarh330@gmail.com', 'comestrotechlabs@gmail.com'];

            // Security Check: Only allow Admin Emails
            if (!in_array($googleUser->getEmail(), $allowedEmails)) {
                return redirect()->route('home')->with('error', 'Unauthorized! Only site admins can login.');
            }

            $user = User::updateOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'password' => Hash::make(Str::random(16)), // Dummy password
                ]
            );

            Auth::login($user);

            return redirect()->route('admin.dashboard');
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Login Failed: ' . $e->getMessage());
        }
    }
}
