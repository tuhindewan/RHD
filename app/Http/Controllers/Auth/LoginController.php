<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $response = Http::post('http://rhddirapp.rhd.gov.bd:892/api/login/UserLogin',[
            'Mobile' => $request->input('mobile')
        ]);
        if(json_decode($response)->ResultState == false){
            // dd(json_decode($response)->Message);
            $message = json_decode($response)->Message;
            return view('auth.login')->with('error', $message);
        }

        if(json_decode($response)->ResultState == true){
            $userData = json_decode($response)->Data->User[0];

            if (!User::where('mobile', '=', $request->input('mobile'))->exists()) {
                DB::table('users')->insert([
                    [
                        'name' => $userData->Name,
                        'password' => Hash::make('123123'),
                        'email' => null,
                        'type' => 'user',
                        'mobile' => $userData->OfficialMobileNo,
                    ]
                ]);
             }

            if (Auth::attempt(array('mobile' => $userData->OfficialMobileNo, 'password' => '123123'))) {
                return redirect()->intended('home');
            }


        }
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
