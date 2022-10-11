<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Invoice;
use App\Models\Medication;
use App\Models\Pharmacist;
use Faker\Provider\Medical;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Solutions\SolutionProviders\ViewNotFoundSolutionProvider;

class MedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medications = Medication::get();
        
        return view('medications.index', compact('medications'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pharmacists = Pharmacist::get();
        $invoices = Invoice::get();
        $categories = Category::get();

        return view('medications.index',
        [
            'pharmacists',
            'invoices',
            'categories',
        ]);
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
            
            'pharmacist_id' => 'required',
            'category_id' => 'required',
            'invoice_id' => 'required',
            'name_medication' => 'required|max:50',
            'manufacturing_date' => 'required|date',
            'Expiry_date' => 'required|date',
            'description_medication' => 'required|max:255',
        ],
        [
            'pharmacist_id.required' => '',
            'category_id.required' => '',
            'invoice_id.required' => '',
            'name_medication.required' => '',
            'manufacturing_date.required' => '',
            'Expiry_date.required' => '',
            'description_medication.required' => '',   
        ]);

        Medication::create($request->all());

        return redirect()->route('medications.index')->with('message', 'Medication created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Pharmacist $pharmacist, Invoice $invoice, Category $category)
    {
        $medication = Medication::find($id);

        return view('medications.show', compact(
            ['$pharmacist', 'invoice', 'category']
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    public function medication_delete($id)
    {

    }
}
