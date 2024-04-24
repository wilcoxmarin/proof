<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use App\Models\Companie;
use Illuminate\Http\RedirectResponse;

class CompanieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $companies = Companie::all();
        return view("components.companies.list", compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view("components.companies.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ], $messages = [
            'required' => 'El :attribute es requerido.'
        ]);

        if ($validator->fails()) {
            return redirect('companies/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        Companie::create($request->all());
        return redirect()->intended('companies');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
       $companie = Companie::find($id);
       return view("components.companies.show", compact('companie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
       $companie = Companie::find($id);
       return view("components.companies.edit", compact('companie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ], $messages = [
            'required' => 'El :attribute es requerido.'
        ]);

        if ($validator->fails()) {
            return redirect('companies/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $companie = Companie::find($id);
        $companie->update($request->all());
        return redirect()->intended('companies');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $companie = Companie::find($id);
        $companie->delete();
        return redirect()->intended('companies');
    }
}
