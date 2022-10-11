<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Medication;
use App\Models\Ordered;
use App\Models\Patient;
use Illuminate\Http\Request;

class OrderedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordereds = Ordered::get();
        return view('ordereds.index', compact('ordereds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::get();
        $medications = Medication::get();

        return view('ordereds.index', compact('patients', 'medications'));
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

            'patient_id' => 'required',
            'medication_id' => 'required',
            'ordered_date' => 'required|date',
            'delivery_date' => 'required|date',
            'ordered_description' => 'required|max:255',
        ],
        [
            'patient_id.required' => '',
            'medication_id.required' => '',
            'ordered_date.required' => '',
            'delivery_date.required' => '',
            'ordered_description.required' => '',
        ]);

        Ordered::create($request->all());

        return redirect()->route('ordereds.index')->with('message','Ordered created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Patient $patient, Medication $medication)
    {
        $ordered_show = Ordered::find($id);

        return view('ordereds.show', compact('patient', 'medication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordered_edit = Ordered::find($id);
        $patients_edit = Patient::get();
        $medications_edit = Medication::get();

        return view('ordereds.edit', compact([
            
            'ordered_edit',
            'patients_edit',
            'medication_edit',
        ]));
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

    public function ordered_delete($id)
    {

    }

}
