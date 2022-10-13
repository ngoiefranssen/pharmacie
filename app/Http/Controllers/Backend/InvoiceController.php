<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Cashier;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Spatie\FlareClient\FlareMiddleware\AddSolutions;
use Symfony\Component\Finder\Finder;

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

        // $date_invoice = date('Y-m-d H:i:s');
        // $new_date_invoice = Carbon::createFromFormat('Y-m-d H:i:s', $date_invoice)
        //                            ->format('m/d/Y');

        
        $Validated_invoice = $request->validate([

            'cashier_id' => 'required',
            'description_invoice' => 'required|max:255' ,
            'amount' => 'required|max:50',
            'date_invoice' => 'required|date', //|after:tomorrow

        ],
        [
            'cashier_id.required' => 'Choississez le caissier svp !',
            'description_invoice.required' => 'Veuillez compléter le champ svp ! Max 255 caractères' ,
            'amount.required' => 'Veuillez compléter le champ svp ! Max 50 caractères',
            'date_invoice.required' => 'la date svp',

        ]);

        // add($Validated_invoice);

        // if(Invoice::create($request->validate())){
 
        //     return redirect()->route('invoices.index')
        //         ->withStatus('Invoice successfully registered.');
        //     }
    
        // return redirect()->route('invoices.index')->with('message', 'Successfully');

        Invoice::create($Validated_invoice);

        return redirect()->route('invoices.index')->with('message', ' La facture a ete enregistrait avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Cashier $cashier)
    {
        $invoice = Invoice::find($id);

        return view('invoices.show', compact('invoice', 'cashier'));
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
    public function update(Request $request, Invoice $invoice)
    {
        // $date_invoice = date('Y-m-d H:i:s');
        // $new_date_invoice = Carbon::createFromFormat('Y-m-d H:i:s', $date_invoice)
        //                             ->format('m/d/Y');

        $request->validate([

            'cashier_id' => 'required',
            'description_invoice' => 'required|max:255',
            'amount' => 'required|max:50',
            'date_invoice' => 'required|date', // |after:tomorrow

        ],
        [
            'cashier_id.required' => 'Choississez le caissier svp !',
            'description_invoice.required' => 'Veuillez compléter le champ svp ! Max 255 caractères' ,
            'amount.required' => 'Veuillez compléter le champ svp ! Max 50 caractères',
            'date_invoice.required' => 'The date invoice must be a date after tomorrow.',
        ]);

        $invoice->update($request->all());

        return redirect()->route('invoices.index')->with('messagae', ' La facture a ete enregistre avec succès');
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
        $delete = Invoice::find($id);

        $delete->delete();

        return back()->with('message', 'La facture a ete supprimer avec succès');
    }
}
