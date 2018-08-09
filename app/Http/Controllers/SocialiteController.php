<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Exception;
use Illuminate\Support\Facades\DB;
use Socialite;
use App\User;

class SocialiteController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }


      public function redirectToProvider_FB()
     {
         return Socialite::driver('facebook')->redirect();
     }

     public function redirectToProvider_G()
    {
        return Socialite::driver('google')->redirect();
    }

     public function handleProviderCallback_FB()
      {
          $userSocial = Socialite::driver('facebook')->user();

          $token = $userSocial->token;
          $refreshToken = $userSocial->refreshToken; // not always provided
          $expiresIn = $userSocial->expiresIn;

          DB::beginTransaction();

          try {

            $data = [
              'nick_name' => $userSocial->getName(),
              'email' => $userSocial->getEmail(),
              'avatar' => $userSocial->getAvatar(),
              'password' =>  bcrypt(123456),
            ];

            $findUser = User::where('email', $userSocial->getEmail())->first();

            if( $findUser )
            {
              \Auth::login($findUser);

            }
            else {
              User::newUser($data);

              $newUser = User::where('email', $userSocial->getEmail())->first();

              \Auth::login($newUser);

              DB::commit();
            }

            return back();


          } catch (\Exception $e) {
              DB::rollback();
              throw $e;
          }

      }

      public function handleProviderCallback_G()
       {
           $userSocial = Socialite::driver('google')->user();

           $token = $userSocial->token;
           $refreshToken = $userSocial->refreshToken; // not always provided
           $expiresIn = $userSocial->expiresIn;

           DB::beginTransaction();

           try {

             $data = [
               'nick_name' => $userSocial->getName(),
               'email' => $userSocial->getEmail(),
               'avatar' => $userSocial->getAvatar(),
               'password' =>  bcrypt(123456),
             ];

             $findUser = User::where('email', $userSocial->getEmail())->first();

             if( $findUser )
             {
               \Auth::login($findUser);

             }
             else {
               User::newUser($data);

               $newUser = User::where('email', $userSocial->getEmail())->first();

               \Auth::login($newUser);

               DB::commit();
             }

              return back();


           } catch (\Exception $e) {
               DB::rollback();
               throw $e;
           }

       }

}
