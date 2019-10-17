<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    //
    public function newCompany(Request $request)
    {
        # code...
        Company::create($request->all());
        return redirect('/company');
    }

    public function allCompany()
    {
        $companies = Company::all();
        return view('company',compact('companies'));
    }

    public function editCompany($id)
    {
        //return $id;
        $company = Company::find($id);
        return view('company.edit',compact('company'));
    }

    public function updateCompany($id, Request $request)
    {
        $company = Company::find($id)->update($request->all());
    }
}
