<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\Statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $statements = Statement::all()->where('final_submition', '==', 1)
                                      ->where('user_id', '==', Auth::user()->id);

        $providers = Provider::all();
        return view('home', compact('statements', 'providers'));
    }

    public function landing()
    {
        return redirect()->route('home');
    }
}
