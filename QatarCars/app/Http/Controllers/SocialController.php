<?php
namespace App\Http\Controllers;
use App\Models\User; // Make sure to import the User model
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            // Handle exception (e.g., user denied access)
            return redirect('/login')->with('error', ucfirst($provider) . ' authentication failed');
        }

        // Check if the user with the given email already exists
        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            // User already exists, log them in
            Auth::login($existingUser);
        } else {
            // User doesn't exist, create a new user
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt(Str::random(16)), // Generate a random password
                'provider' => $provider,
                'provider_id' => $user->getId(),
                'avatar' => $user->getAvatar(),
            ]);

            // Log in the new user
            Auth::login($newUser);
        }

        return redirect()->route('home')->with('status', 'Logged in with ' . ucfirst($provider) . '!');

    }
}
