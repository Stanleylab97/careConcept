<?php

namespace App\Http\Controllers\Admin;

use App\Entreprise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises= Entreprise::all();
        return view('enseigne.liste',compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enseigne.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        auth()->user()->entreprises()->create([
		  'libelle'=>$request->libelle,
		  'slogan'=>$request->slogan,
		  'tel'=>$request->tel,
		  'email'=>$request->email,
		  'site'=>$request->site,
		  'description'=>$request->description
		]);
        
        return redirect(route('admin.entreprise.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        //
    }
}
