<?php

namespace App\Http\Controllers;

use App\Models\company;
use Faker\Provider\ar_EG\Company as Ar_EGCompany;
use Faker\Provider\ar_JO\Company as Ar_JOCompany;
use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    //create index
    public function index(){
        $data['companies'] = company::orderBy('id','asc')->paginate(5);
        return view('companies.index',$data);
    }

    //create resource
    public function create(){
        return view('companies.create');
    }

       //store resource
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
    ]);

        $company = new company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->save();
        return redirect()->route('companies.index')->with('success','aaaaaaa.');
    }

    public function edit(Company $company){
        return view('companies.edit',compact('company'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);
        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->save();
        return redirect()->route('companies.index')->with('success', 'edis ss');
    }

    public function destroy(Company $company){
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'delete ss');
    }
}
