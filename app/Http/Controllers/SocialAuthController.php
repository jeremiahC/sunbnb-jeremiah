<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Services\SocialFacebookAccountService;

class SocialAuthController extends Controller
{
   public function redirect()
   {
       return Socialite::driver('facebook')->redirect();
   }

   public function callback(SocialFacebookAccountService $service)
   {
       $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
       auth()->login($user);

       return redirect()->route('home');
   }

}
