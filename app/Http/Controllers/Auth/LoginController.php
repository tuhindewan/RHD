<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Classes\SendCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;
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
            return view('auth.login')->with('error', __('auth.not_registered'));
        }

        if(json_decode($response)->ResultState == true){
            $userData = json_decode($response)->Data->User[0];

            if (!User::where('mobile', '=', $request->input('mobile'))->exists()) {
                $user = User::create([
                    'name' => $userData->Name,
                    'password' => Hash::make('123123'),
                    'email' => $userData->OfficialEMailID,
                    'type' => 'user',
                    'mobile' => $userData->OfficialMobileNo,
                ]);
                if($user){
                    DB::table('employees')->insert([
                        [
                            'displayName' => $userData->DisplayName,
                            'officeName' => $userData->OfficeName,
                            'personalID' => $userData->PersonalID,
                            'officeID' => $userData->OFficeID,
                            'designation' => $userData->Designation,
                            'firstNameBN' => $userData->FirstName_Bangla,
                            'lastNameBn' => $userData->LastName_Bangla,
                            'empID' => $userData->EmpID,
                            'user_id' => $user->id
                        ]
                    ]);
                }


                if($user) {
                    $code = SendCode::sendCode($userData->OfficialMobileNo, $userData->Name);
                    DB::table('users')
                        ->where('mobile', $userData->OfficialMobileNo)
                        ->update([
                            'code' => $code
                        ]);
                }

                $parameter= Crypt::encrypt($userData->OfficialMobileNo);
                return redirect('/otp/verification/'.$parameter)->with('success', __('auth.otp_send'));
             }else{
                $code = SendCode::sendCode($userData->OfficialMobileNo, $userData->Name);
                DB::table('users')
                    ->where('mobile', $userData->OfficialMobileNo)
                    ->update([
                        'code' => $code
                    ]);
                $parameter= Crypt::encrypt($userData->OfficialMobileNo);
                return redirect('/otp/verification/'.$parameter)->with('success', __('auth.otp_send'));
             }

        }
    }

    public function getOTPForm($mn)
    {
        $number = Crypt::decrypt($mn);
        return view('otp.form', compact('number'));
    }

    public function postOTPForm(Request $request)
    {
        if($user=User::where('code',$request->code)->where('mobile', $request->mobile)->first()){
            $user->code=null;
            $user->save();
            if (Auth::attempt(array('mobile' => $request->mobile, 'password' => '123123'))) {
                return redirect()->intended('home');
            }
        }
        else{
            return back()->with('error', __('auth.not_correct_code'));
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
