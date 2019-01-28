<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SocialAuth;

class SocialsController extends Controller
{
    //  github

     public function auth($provider){

         return   SocialAuth::authorize($provider);
     }

     public function auth_callback($provider){
          
            SocialAuth::login($provider, function($user, $details){
                 
                 $user->avatar = $details->avatar;
                 $user->email = $details->email;
                 $user->name = $details->ful_name;

                 $user->save();
            });

            return redirect('/home');
     }

}
