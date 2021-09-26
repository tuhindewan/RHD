<?php

namespace App\Http\Controllers;

use App\Models\Bima;
use App\Models\Building;
use App\Models\Business;
use App\Models\Cash;
use App\Models\Electronic;
use App\Models\Home;
use App\Models\Land;
use App\Models\Ornament;
use App\Models\Share;
use App\Models\Stock;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {
        return view('property');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        DB::transaction(function () use($request) {
            $land = Land::create([
                'land_acquisition_date' => $request->land_acquisition_date,
                'land_acquisition_name' => $request->land_acquisition_name,
                'land_property_amount' => $request->land_property_amount,
                'land_reason_price' => $request->land_reason_price,
                'land_source_money' => $request->land_source_money,
                'land_acquisition_address' => $request->land_acquisition_address,
                'land_comments' => $request->land_comments,
                'user_id' => Auth::user()->id,
                'property_type' => 'immovable'
            ]);

            $building = Building::create([
                'building_acquisition_date' => $request->building_acquisition_date,
                'building_acquisition_name' => $request->building_acquisition_name,
                'building_property_amount' => $request->building_property_amount,
                'building_reason_price' => $request->building_reason_price,
                'building_source_money' => $request->building_source_money,
                'building_acquisition_address' => $request->building_acquisition_address,
                'building_comments' => $request->building_comments,
                'user_id' => Auth::user()->id,
                'property_type' => 'immovable'
            ]);

            $home = Home::create([
                'home_acquisition_date' => $request->home_acquisition_date,
                'home_acquisition_name' => $request->home_acquisition_name,
                'home_property_amount' => $request->home_property_amount,
                'home_reason_price' => $request->home_reason_price,
                'home_source_money' => $request->home_source_money,
                'home_acquisition_address' => $request->home_acquisition_address,
                'home_comments' => $request->home_comments,
                'user_id' => Auth::user()->id,
                'property_type' => 'immovable'
            ]);

            $business = Business::create([
                'business_acquisition_date' => $request->business_acquisition_date,
                'business_acquisition_name' => $request->business_acquisition_name,
                'business_property_amount' => $request->business_property_amount,
                'business_reason_price' => $request->business_reason_price,
                'business_source_money' => $request->business_source_money,
                'business_acquisition_address' => $request->business_acquisition_address,
                'business_comments' => $request->business_comments,
                'user_id' => Auth::user()->id,
                'property_type' => 'immovable'
            ]);

            $ornament = Ornament::create([
                'ornament_acquisition_date' => $request->ornament_acquisition_date,
                'ornament_acquisition_name' => $request->ornament_acquisition_name,
                'ornament_property_amount' => $request->ornament_property_amount,
                'ornament_reason_price' => $request->ornament_reason_price,
                'ornament_source_money' => $request->ornament_source_money,
                'ornament_acquisition_address' => $request->ornament_acquisition_address,
                'ornament_comments' => $request->ornament_comments,
                'user_id' => Auth::user()->id,
                'property_type' => 'movable'
            ]);

            $stock = Stock::create([
                'stock_acquisition_date' => $request->stock_acquisition_date,
                'stock_acquisition_name' => $request->stock_acquisition_name,
                'stock_property_amount' => $request->stock_property_amount,
                'stock_reason_price' => $request->stock_reason_price,
                'stock_source_money' => $request->stock_source_money,
                'stock_acquisition_address' => $request->stock_acquisition_address,
                'stock_comments' => $request->stock_comments,
                'user_id' => Auth::user()->id,
                'property_type' => 'movable'
            ]);

            $share = Share::create([
                'share_acquisition_date' => $request->share_acquisition_date,
                'share_acquisition_name' => $request->share_acquisition_name,
                'share_property_amount' => $request->share_property_amount,
                'share_reason_price' => $request->share_reason_price,
                'share_source_money' => $request->share_source_money,
                'share_acquisition_address' => $request->share_acquisition_address,
                'share_comments' => $request->share_comments,
                'user_id' => Auth::user()->id,
                'property_type' => 'movable'
            ]);

            $bima = Bima::create([
                'bima_acquisition_date' => $request->bima_acquisition_date,
                'bima_acquisition_name' => $request->bima_acquisition_name,
                'bima_property_amount' => $request->bima_property_amount,
                'bima_reason_price' => $request->bima_reason_price,
                'bima_source_money' => $request->bima_source_money,
                'bima_acquisition_address' => $request->bima_acquisition_address,
                'bima_comments' => $request->bima_comments,
                'user_id' => Auth::user()->id,
                'property_type' => 'movable'
            ]);

            $cash = Cash::create([
                'cash_acquisition_date' => $request->cash_acquisition_date,
                'cash_acquisition_name' => $request->cash_acquisition_name,
                'cash_property_amount' => $request->cash_property_amount,
                'cash_reason_price' => $request->cash_reason_price,
                'cash_source_money' => $request->cash_source_money,
                'cash_acquisition_address' => $request->cash_acquisition_address,
                'cash_comments' => $request->cash_comments,
                'user_id' => Auth::user()->id,
                'property_type' => 'movable'
            ]);

            $vehicle = Vehicle::create([
                'vehicle_acquisition_date' => $request->vehicle_acquisition_date,
                'vehicle_acquisition_name' => $request->vehicle_acquisition_name,
                'vehicle_property_amount' => $request->vehicle_property_amount,
                'vehicle_reason_price' => $request->vehicle_reason_price,
                'vehicle_source_money' => $request->vehicle_source_money,
                'vehicle_acquisition_address' => $request->vehicle_acquisition_address,
                'vehicle_comments' => $request->vehicle_comments,
                'user_id' => Auth::user()->id,
                'property_type' => 'movable'
            ]);


            $electronics = Electronic::create([
                'electronics_acquisition_date' => $request->electronics_acquisition_date,
                'electronics_acquisition_name' => $request->electronics_acquisition_name,
                'electronics_property_amount' => $request->electronics_property_amount,
                'electronics_reason_price' => $request->electronics_reason_price,
                'electronics_source_money' => $request->electronics_source_money,
                'electronics_acquisition_address' => $request->electronics_acquisition_address,
                'electronics_comments' => $request->electronics_comments,
                'user_id' => Auth::user()->id,
                'property_type' => 'movable'
            ]);

        });

        return redirect()->route('view')
                ->with('success', 'Employee created successfully.');
    }

    public function view()
    {
        $land = Land::where('user_id', Auth::user()->id)->first();
        return view('view', compact('land'));
    }
}
