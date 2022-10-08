<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Cashier;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::get();

        return view('invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cashiers = Cashier::get();

        return view('invoices.create', compact('cashiers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $date_invoice = date('Y-m-d H:i:s');
        $new_date_invoice = Carbon::createFromFormat('Y-m-d H:i:s', $date_invoice)
                                    ->format('m/d/Y');


        $request->validate([

            'cashier_id' => 'required',
            'description_invoice' => 'required|max:255' ,
            'amount' => 'required|max:50',
            'new_date_invoicess' => 'required',

        ],
        [
            'cashier_id.required' => 'Choississez le caissier svp !',
            'description_invoice.required' => 'Veuillez compléter le champ svp ! Max 255 caractères' ,
            'amount.required' => 'Veuillez compléter le champ svp ! Max 50 caractères',
            'new_date_invoice.required' => '',
        ]);

        Invoice::create($request->all());

        return redirect()->route('invoices.index')->with('message', ' La facture a ete enregistrait avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice_edit = Invoice::find($id);
        $cashiers = Cashier::get();

        return view('invoices.edit', compact('invoice_edit', 'cashiers'));
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
        //
    }

    public function delete_invoice($id)
    {

    }
}
