<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeStoreRequest;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function index()
    {
        return view('type.index');
    }

    public function create()
    {
        return view('type.create');
    }

    public function store(TypeStoreRequest $request)
    {
        PropertyType::create([
            'name' => $request->name
        ]);

        return redirect()->route('type.index')
                ->with('success', 'সম্পদ / সম্পত্তির ধরণ সফল ভাবে সংরক্ষণ করা হয়েছে');
    }
}
