<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SocialController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::firstOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'password' => Hash::make(Str::random(12)), 
                'status' => 1, 
            ]
        );

        Auth::login($user);

        return redirect('/'); 
    }

    public function redirectToGithub()
{
    return Socialite::driver('github')->redirect();
}
public function handleGithubCallback()
{
    $githubUser = Socialite::driver('github')->stateless()->user();

    if (!$githubUser->getEmail()) {
        return redirect('/login')->with('error', 'GitHub email required');
    }

    $user = User::firstOrCreate(
        ['email' => $githubUser->getEmail()],
        [
            'name' => $githubUser->getName() ?? $githubUser->getNickname(),
            'password' => Hash::make(Str::random(12)),
             'status' => 1, 
        ]
    );

    Auth::login($user);
    return redirect('/');
}


}

