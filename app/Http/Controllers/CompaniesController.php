<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
//use Auth;
class CompaniesController extends Controller
{
    //
    public Function index(){
    	$companies=Company::all();
    	return view('companies.index',['companies'=>$companies]);
    }
    public Function show(Company $company){
    	//$company=Company::where('id',$company)
    	$company=Company::where('id',$company->id)->first();
    	return view('companies.show',['company'=>$company]);
    }
    public Function edit(Company $company){
    	//$company=Company::where('id',$company)
    	$company=Company::where('id',$company->id)->first();
    	return view('companies.edit',['company'=>$company]);
    }
    public Function update(Request $request,Company $company){
    	//$company=Company::where('id',$company)
    	$companyUpdate=Company::where('id',$company->id)
    	                         ->update([
    	                         	'name'=> $request->input('name'),
    	                         	'description'=> $request->input('description')
    	                         	]);
       if($companyUpdate){
    	return redirect()->route('companies.show',['company'=>$company->id])
    	->with('success','Company updated successfully');
       	
       }
       return back()->withInput();
    }
    public Function create(){
            return view('companies.create');

    }
    public function store(Request $request){
        if(Auth::check()){
            $company=Company::create([
                'name'=> $request->input('name'),
                'description'=> $request->input('description'),
                'user_id'=> Auth::getuser()->id
                ]);


        if($company){
            return redirect()->route('companies.show',['company'=>$company->id])
            ->with('success','Company created succesfully');
        }    
        }
        return back()->withInput()->with('errors','error creating new company');
    }
}
