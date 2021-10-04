<?php

namespace App\Http\Controllers;

use App\Models\Statement;
use Illuminate\Http\Request;
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

        $allStatements = Statement::all()->where('final_submition', '==', 1);

        return view('home', compact('statements', 'allStatements'));
    }

    public function landing()
    {
        return redirect()->route('home');
    }
}
