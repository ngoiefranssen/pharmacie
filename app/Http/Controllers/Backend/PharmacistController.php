<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pharmacist;
use Illuminate\Http\Request;

class PharmacistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharmacists = Pharmacist::all();
        
        return view('pharmacists.index', compact('pharmacists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pharmacists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name_pharmacist' => 'required|max:50',
            'first_name_pharmacist' => 'required|max:50',
            'num_tel_pharmacist' => 'required|max:30',
            'email_pharmacist' => 'required|email|unique:users,email|max:50'
        ],
        [
            'name_pharmacist.required' => 'Veuillez compléter le champ nom svp ! et le max des caracteres est de 50',
            'first_name_pharmacist.required' => 'Veuillez compléter le champ prenom svp ! et le max des caracteres est de 50',
            'num_tel_pharmacist.required' => 'Veuillez compléter le champ numero svp ! et le max est de 30',
            'email_pharmacist.required' => 'Veuillez compléter le champ email svp ! et le max des caracteres est de 50',
        ]);

        Pharmacist::create($request->all());

        return redirect()->route('pharmacists.index')->with('message', 'Pharmacist created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pharmacist_show = Pharmacist::find($id);

        return view('pharmacists.show', compact('pharmacist_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pharmacist_edit = Pharmacist::find($id);

        return view('pharmacists.edit', compact('pharmacist_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pharmacist $pharmacist)
    {
        $request->validate([

            'name_pharmacist' => 'required|max:50',
            'first_name_pharmacist' => 'required|max:50',
            'num_tel_pharmacist' => 'required|max:30',
            'email_pharmacist' => 'required|email|unique:users,email|max:50'
        ]);

        $pharmacist->update($request->all());

        return redirect()->route('pharmacists.index')->with('message', 'pharmacist mondifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete_pharmacist($id)
    {
        $delete_pharmcist = Pharmacist::find($id);
        $delete_pharmcist->delete();

        return back()->with('message', 'Le caissier a ete supprimer avec succès');
    }
}
