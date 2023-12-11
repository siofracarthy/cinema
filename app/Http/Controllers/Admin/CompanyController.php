<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $companies = Company::all();

        return view('admin.companies.index')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $companies = Company::all();
        return view('admin.companies.create')->with('companies', $companies);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                //https://laravel.com/docs/10.x/validation
                $request->validate([
                    'name' => 'required',
                    'founding_year' => 'required',
                    'email' => 'required',
                    'phone_number' => 'required',

                ]);


                Company::create([
                    'name' => $request->name,
                    'founding_year' => $request->founding_year,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number


                ]);
                return to_route('admin.companies.index')->with('success', 'Company created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        if (!Auth::id()) {
            return abort(403);
        }

        $films = $company->films;

        return view('admin.companies.show', compact('company', 'films'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'founding_year' => 'required',
            'email' => 'required',
            'phone_number' => 'required',


        ]);



        $company->update([
            'name' => $request->name,
            'founding_year' => $request->founding_year,
            'email' => $request->email,
            'phone_number' => $request->phone_number
        ]);
        // return to_route('films.show')->with('success', 'Film updated successfully');
        return to_route('admin.companies.show', $company)->with('success', 'Company updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return to_route('admin.companies.index')->with('success', 'Company deleted successfully');
    }
}
