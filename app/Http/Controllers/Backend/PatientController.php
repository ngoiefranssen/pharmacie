<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients = Patient::get();

        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
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

        $request->validate([

            'name_patient' => 'required|max:50',
            'first_name_patient' => 'required|max:50',
            'age_patient' => 'required|max:10',
            'kind_patient' => 'required|max:10',
            'num_tel_patient' => 'required|max:30',
            'email_patient' => 'required|max:50',
        ],
        [
            'name_patient.required' => 'Veuillez compléter le champ svp ! Max 50 caractères',
            'first_name_patient.required' => 'Veuillez compléter le champ svp ! Max 50 caractères',
            'age_patient.required' => 'Veuillez compléter le champ svp ! Max 10',
            'kind_patient.required' => 'Veuillez compléter le champ svp ! Max 10 caractères',
            'num_tel_patient.required' => 'Veuillez compléter le champ svp ! Max 30 nombres',
            'email_patient.required' => 'Veuillez compléter le champ svp ! Max 50 caractères',
        ]);

        Patient::create($request->all());

        return redirect()->route('patients.index')->with('message', 'le (la) patient(e) a ete enregistrait avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient_show)
    {
        return view('patients.show', compact('patient_show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient_edit = Patient::find($id);
        return view('patients.edit', compact('patient_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate(
            [

                'name_patient' => 'required|max:50',
                'first_name_patient' => 'required|max:50',
                'age_patient' => 'required|max:10',
                'kind_patient' => 'required|max:10',
                'num_tel_patient' => 'required|max:30',
                'email_patient' => 'required|max:50',
            ],
            [
                'name_patient.required' => 'Veuillez compléter le champ svp ! Max 50 caractères',
                'first_name_patient.required' => 'Veuillez compléter le champ svp ! Max 50 caractères',
                'age_patient.required' => 'Veuillez compléter le champ svp ! Max 10',
                'kind_patient.required' => 'Veuillez compléter le champ svp ! Max 10 caractères',
                'num_tel_patient.required' => 'Veuillez compléter le champ svp ! Max 30 nombres',
                'email_patient.required' => 'Veuillez compléter le champ svp ! Max 50 caractères',
            ]);


            $patient->update($request->all());

            return redirect()->route('patients.index')->with('message', 'Patient(e) mondifiée avec succès');
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

    public function delete_patient($id)
    {
        $patient_delete = Patient::find($id);
        $patient_delete->delete();

        return back()->with('message', 'Le(La) patient(e) a ete supprimer avec succès');
    }
}
