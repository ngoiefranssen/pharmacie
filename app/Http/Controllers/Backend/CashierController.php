<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Cashier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cashiers = Cashier::all();
        
        return view('cashiers.index', compact('cashiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cashiers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $valideted_cashier =  $request->validate([

            'name_cashier' => 'required|max:50',
            'first_name_cashier' => 'required|max:50',
            'num_tel_cashier' => 'required|max:30',
            'email_cashier' => 'required|email|unique:users,email|max:50',
        ],
        [
            'name_cashier.required' => 'Veuillez compléter le champ nom svp !',
            'first_name_cashier.required' => 'Veuillez compléter le champ prenom svp !',
            'num_tel_cashier.required' => 'Veuillez réécrire le numéro svp !',
            'email_cashier.required' => 'Email incorrect !', 
        ]);

        // Cashier::create($request->all());

        Cashier::create($valideted_cashier);

        return redirect()->route('cashiers.index')->with('message', 'Cashiers created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cashiers_show = Cashier::find($id);
        return view('cashiers.show', compact('cashiers_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cashier_edit = Cashier::find($id);

        return view('cashiers.edit', compact('cashier_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cashier $cashier) //Cashier $cashier
    {
       $request->validate([

            'name_cashier' => 'required|max:50',
            'first_name_cashier' => 'required|max:50',
            'num_tel_cashier' => 'required|max:30',
            'email_cashier' => 'required|max:50|email|unique ',
        ],
        // [
        //     'name_cashier.required' => '',
        //     'first_name_cashier.required' => '',
        //     'num_tel_cashier.required' => '',
        //     'email_cashier.required' => '',
        // ]
    );

        $cashier->update($request->all());

        return redirect()->route('cashiers.index')->with('message', 'Caissier mondifiée avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $cashier_delete = Cashier::find($id);

    //     $cashier_delete->delete();

    //     return back()->with('message', 'Le caissier a ete supprimer avec succès');
    // }

    public function delete_Cashier($id)
    {
        $cashier_delete = Cashier::find($id);

        $cashier_delete->delete();

        return back()->with('message', 'Le caissier a ete supprimer avec succès');
    }
}
