<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$companies = Company::orderBy('id', 'DESC')->paginate();
        return view('companies.index',compact('companies'));*/

        $companies = Company::get();

        return $companies;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'money' => 'required',
            'contact' => 'required',
            'telephone' => 'required',
            'coment' => 'required',
            'is_gestioned' => 'required',
        ]);
        Company::create($request->all());
        return;
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);

        return $company;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::FindOrFail($id);

        $company->delete();
    }

    /**
     * Ganerate a PDF file with the new company register 
     */
    public function imprimir(){
        //$name=$request->input('name');
        //$name=$request->url();
        $company = Company::get()->last();

        $pdf = \PDF::loadView('pdf', compact('company'));
        return $pdf->download('Company.pdf');
   }

}
