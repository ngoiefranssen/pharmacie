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

        // dd($medications);
        
        return view('medications.index', ['medications' => $medications]);
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

        return view('medications.create', compact(
            'pharmacists',
            'invoices',
            'categories',
        ));
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
            'pharmacist',
            'invoice',
            'category',
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
        $medication = Medication::find($id);
        $pharmacists = Pharmacist::get();
        $invoices = Invoice::get();
        $categories = Category::get();

        return view('medications.edit', compact(
            
            'medication',
            'pharmacists',
            'invoices',
            'categories',
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medication $medication)
    {
        $request->validate([

            'pharmacist_id' => 'required',
            'category_id' => 'required',
            'invoice_id' => 'required',
            'name_medication' => 'required|max:50',
            'manufacturing_date' => 'required|date',
            'Expiry_date' => 'required|date',
            'description_medication' => 'required|max:255',
        ]);

        $medication->update($request->all());

        return redirect()->route('medications.index')
                         ->with('message', 'Le medication a ete mondifi??e avec succ??s');
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
        $delete_medication = Medication::find($id);
        $delete_medication->delete();

        return back()->with('message', 'le medicement a ete supprimer avec succ??s');
    }
}
