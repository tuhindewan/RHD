<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Provider;
use App\Models\Statement;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Models\StatementDetail;
use App\Models\PropertyCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

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
        $categories = PropertyCategory::all()->pluck('name', 'id');
        return view('statement.create', compact('types', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
       $statement = DB::transaction(function () use($request) {
            $statement = Statement::create([
                'user_id' => Auth::user()->id,
                'type_id' => $request->type_id,
                'category_id' => $request->category_id
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
                ->with('success', '??????????????? / ??????????????????????????? ??????????????? ??????????????? ????????? ???????????? ????????????????????? ????????? ???????????????');
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
        // dd($request->all());

        $statement = Statement::findOrFail($id);

        $statement = DB::transaction(function () use($request, $statement) {
            DB::table('statements')->where('id', $statement->id)->update([
                            'type_id' => $request->type_id,
                            'category_id' => $request->category_id
                        ]);

            $statement->details()->delete();

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
                ->with('success', '??????????????? / ??????????????????????????? ??????????????? ??????????????? ????????? ???????????? ????????????????????? ????????? ???????????????');
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


    public function finalSubmit($id)
    {
        $statement  = Statement::findOrFail($id);
        $userID = Auth::user()->id;

        if(!Provider::where('user_id', '=', $userID)->exists()){
            DB::table('providers')->insert([
                [
                    'user_id' => $userID
                ]
            ]);
        }
        $affected = DB::table('statements')
              ->where('id', $statement->id)
              ->update(['final_submition' => 1]);

        if($affected){
            return redirect()->route('home')
                ->with('success', '??????????????? / ??????????????????????????? ??????????????? ??????????????? ????????? ???????????? ????????????????????? ????????? ???????????????');
        }
    }

    public function overview()
    {
        $movables = Statement::all()->where('final_submition', '==', 1)
                                      ->where('category_id', '==', 1)
                                      ->where('user_id', '==', Auth::user()->id);
        $immovables = Statement::all()->where('final_submition', '==', 1)
                                      ->where('category_id', '==', 2)
                                      ->where('user_id', '==', Auth::user()->id);
        // dd(count($immovables));
        $user = Auth::user();
        // dd($user->employee);
        return view('statement.overview.index',compact('immovables', 'movables', 'user'));
    }

    public function getPropertyTypes($id)
    {
        $types = PropertyType::all()->where('category_id', $id)->pluck('name', 'id');
        return json_encode($types);
    }

    public function statementOverviewPrint()
    {
        $movables = Statement::all()->where('final_submition', '==', 1)
                ->where('category_id', '==', 1)
                ->where('user_id', '==', Auth::user()->id);
        $immovables = Statement::all()->where('final_submition', '==', 1)
                ->where('category_id', '==', 2)
                ->where('user_id', '==', Auth::user()->id);
        $user = Auth::user();
        return view('statement.overview.print',compact('immovables', 'movables', 'user'));
    }

    public function statementListofIndividualUser($userID)
    {
        $id = Crypt::decrypt($userID);
        $statements = Statement::all()->where('final_submition', '==', 1)
                ->where('user_id', '==', $id);
        $user = User::findOrfail($id);
        return view('statement.provider.list', compact('statements', 'user'));
    }

    public function statementOverviewofIndividualUser($userID)
    {
        $user = Crypt::decrypt($userID);
        $movables = Statement::all()->where('final_submition', '==', 1)
                                      ->where('category_id', '==', 1)
                                      ->where('user_id', '==', $user);
        $immovables = Statement::all()->where('final_submition', '==', 1)
                                      ->where('category_id', '==', 2)
                                      ->where('user_id', '==', $user);
        return view('statement.provider.overview',compact('immovables', 'movables'));
        dd($user);
    }
}
