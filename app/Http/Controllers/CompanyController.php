<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companyList(){
        $companies = Company::withTrashed()->get();
        return view('backend.pages.company.companyList',compact('companies'));
    }

    public function companyAdd(Request $request){
        // dd($request->all());

        Company::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'address'=>$request->address,
            'status'=>$request->status,
            'contact'=>$request->contact
        ]);

        return redirect()->back();
    }

    public function companyEdit($id){
        $company = Company::find($id);
        // dd($company);
        return view('backend.pages.company.editCompany',compact('company'));
    }

    public function companyUpdate(Request $request,$id){
        // dd($request->all());
        $company = Company::find($id);
        if ($company) {
            $company->update([
                'name'=>$request->name,
                'description'=>$request->description,
                'address'=>$request->address,
                'status'=>$request->status,
                'contact'=>$request->contact
            ]);

            return redirect()->route('company.list');
        }
    }

    public function companyDelete($id){
        $company = Company::find($id);
        if ($company) {
            $company->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function companyRestore($id){
        // dd($id);
        $company = Company::withTrashed()->find($id);
        if ($company) {
            $company->restore();
            return redirect()->back();
        }

        return redirect()->back();
    }
}
