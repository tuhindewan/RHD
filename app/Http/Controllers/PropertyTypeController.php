<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Models\PropertyCategory;
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
        $categories = PropertyCategory::all()->pluck('name', 'id');
        return view('type.create', compact('categories'));
    }

    public function store(TypeStoreRequest $request)
    {
        // dd($request->all());
        PropertyType::create([
            'name' => $request->name,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('type.index')
                ->with('success', 'সম্পদ / সম্পত্তির ধরণ সফল ভাবে সংরক্ষণ করা হয়েছে');
    }

    public function edit(PropertyType $type)
    {
        $categories = PropertyCategory::all()->pluck('name', 'id');
        return view('type.edit', compact('type', 'categories'));
    }

    public function update(TypeUpdateRequest $request, PropertyType $type)
    {
        $type->update($request->all());

        return redirect()->route('type.index')
                ->with('success', 'সম্পদ / সম্পত্তির ধরণ সফল ভাবে পরিবর্তন করা হয়েছে');
    }

}
