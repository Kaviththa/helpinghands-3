<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo(){
        switch(Auth::user()->role){
         case 1:
             $this->redirectTo = '/helper';
         return $this->redirectTo;
         break;

         case 2:
         $this->redirectTo = '/team';
         return $this->redirectTo;
         break;

         case 3:
         $this->redirectTo = '/receiver';
         return $this->redirectTo;
         break;

         default:
         $this->redirectTo = '/login';
         return $this->redirectTo;
        }
 }


}
