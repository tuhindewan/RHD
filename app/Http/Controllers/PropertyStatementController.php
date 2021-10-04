<?php

namespace App\Http\Controllers;

use App\Models\Statement;
use App\Models\PropertyType;
use App\Models\StatementDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PropertyStatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = PropertyType::all()->pluck('name', 'id');
        return view('statement.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $statement = DB::transaction(function () use($request) {
            $statement = Statement::create([
                'user_id' => Auth::user()->id,
                'type_id' => $request->type_id
            ]);

            foreach($request->input('category-group') as $data){
                StatementDetail::create([
                    'acquisition_date' => $data['acquisition_date'],
                    'acquisition_name' => $data['acquisition_name'],
                    'property_amount' => $data['property_amount'],
                    'reason_price' => $data['reason_price'],
                    'source_money' => $data['source_money'],
                    'acquisition_address' => $data['acquisition_address'],
                    'comments' => $data['comments'],
                    'statement_id' => $statement->id,
                ]);
            }

            return $statement;

        });

        return redirect()->route('statement.show', $statement->id)
                ->with('success', 'সম্পদ / সম্পত্তির হিসাব বিবরণ সফল ভাবে সংরক্ষণ করা হয়েছে');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $statement = Statement::findOrFail($id);
        // dd($statement->details);
        return view('statement.preview', compact('statement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = PropertyType::all()->pluck('name', 'id');
        $statement = Statement::findOrFail($id);

        // dd($statement->details);
        $stateDetails = $statement->details->map(function ($sd) {
            return ['acquisition_date' => $sd->acquisition_date,
                    'acquisition_name' => $sd->acquisition_name,
                    'property_amount' => $sd->property_amount,
                    'reason_price' => $sd->reason_price,
                    'source_money' => $sd->source_money,
                    'acquisition_address' => $sd->acquisition_address,
                    'comments' => $sd->comments
                    ];
        })->values();

        // dd($stateDetails);


        return view('statement.edit', compact('statement', 'types', 'stateDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function preview(Request $request)
    {
        $data = $request->all();
        return view('statement.preview', compact('data'));
    }


    public function finalSubnit($id)
    {
        $statement  = Statement::findOrFail($id);
        $affected = DB::table('statements')
              ->where('id', $statement->id)
              ->update(['final_submition' => 1]);

        if($affected){
            return redirect()->route('home')
                ->with('success', 'সম্পদ / সম্পত্তির হিসাব বিবরণ সফল ভাবে সংরক্ষণ করা হয়েছে');
        }
    }
}
