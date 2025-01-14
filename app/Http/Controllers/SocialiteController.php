<?php

namespace App\Http\Controllers;

use Laravel\Socialitr\Facades\Socialite;
use Illuminate\Http\Request;

class SocialiteController extends Controller
{
    public function googleLogin() {
        return Socialite::driver('google')->redirect();
    }
}
