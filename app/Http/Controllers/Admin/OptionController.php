<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OptionFormRequest;
use App\Http\Requests\PropertyFormRequest;
use App\Models\Option;
use App\Models\Property;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.options.index',[
            'options' => Option::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $option = new Option();
        // dd($option, $option->exists);
        return view('Admin.options.form', [
            'option' => new Option()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request)
    {
        Option::create($request->validated());
        return to_route('admin.option.index')->with('success', "Enregistree !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $option)
    {
        return view('Admin.options.form', [
            'option' => $option
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, Option $option)
    {
        $option->update($request->validated());
        return to_route('admin.option.index')->with('success', "Modifier avec succes !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option)
    {
        $option->delete();
        return to_route('admin.option.index')->with('success', "Supprimer avec succes !");
    }
}
