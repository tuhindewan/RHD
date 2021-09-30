<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Http\Requests\TypeStoreRequest;
use App\Http\Requests\TypeUpdateRequest;

class PropertyTypeController extends Controller
{
    public function index()
    {
        $types = PropertyType::all();
        return view('type.index', compact('types'));
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

    public function edit(PropertyType $type)
    {
        return view('type.edit', compact('type'));
    }

    public function update(TypeUpdateRequest $request, PropertyType $type)
    {
        $type->update($request->all());

        return redirect()->route('type.index')
                ->with('success', 'সম্পদ / সম্পত্তির ধরণ সফল ভাবে পরিবর্তন করা হয়েছে');
    }
}
