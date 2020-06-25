<?php

namespace App\Http\Controllers;

use App\Services\SocialFacebookAccountService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

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

       return redirect('/');
   }

}
