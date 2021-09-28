<?php

namespace App\Http\Controllers;

use App\Models\Bima;
use App\Models\Cash;
use App\Models\Home;
use App\Models\Land;
use App\Models\Share;
use App\Models\Stock;
use App\Models\Vehicle;
use App\Models\Building;
use App\Models\Business;
use App\Models\Ornament;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Electronic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDFGenerateController extends Controller
{
    public function pdfGenerate()
    {
        $land = Land::where('user_id', Auth::user()->id)->first();
        $building = Building::where('user_id', Auth::user()->id)->first();
        $home = Home::where('user_id', Auth::user()->id)->first();
        $business = Business::where('user_id', Auth::user()->id)->first();
        $ornament = Ornament::where('user_id', Auth::user()->id)->first();
        $stock = Stock::where('user_id', Auth::user()->id)->first();
        $share = Share::where('user_id', Auth::user()->id)->first();
        $bima = Bima::where('user_id', Auth::user()->id)->first();
        $cash = Cash::where('user_id', Auth::user()->id)->first();
        $vehicle = Vehicle::where('user_id', Auth::user()->id)->first();
        $electronics = Electronic::where('user_id', Auth::user()->id)->first();

        $pdf = PDF::loadView('pdf.statement');
        return $pdf->download('itsolutionstuff.pdf');
    }
}
