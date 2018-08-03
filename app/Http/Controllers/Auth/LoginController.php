<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Mockery\Exception;
use Illuminate\Support\Facades\DB;
use Socialite;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
   {
       return Socialite::driver('facebook')->redirect();
   }

   public function handleProviderCallback()
    {
        $userSocial = Socialite::driver('facebook')->user();

        $token = $userSocial->token;
        $refreshToken = $userSocial->refreshToken; // not always provided
        $expiresIn = $userSocial->expiresIn;

        DB::beginTransaction();

        try {

          $findUser = User::where('email', $userSocial->getEmail())->first();

          if( $findUser )
          {
            Auth::login($findUser);
          }
          else {
            $user = new User;

            $user->nick_name = $userSocial->getName();;

            $user->email = $userSocial->getEmail();

            $user->avatar = $userSocial->getAvatar();

            $user->password = bcrypt(123456);

            $user->save();

            Auth::login($userSocial->getEmail());

            return redirect()->back();
          }

        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

    }
}
