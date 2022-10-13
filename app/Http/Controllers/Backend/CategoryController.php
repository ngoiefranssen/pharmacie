<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Pharmacist;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::select('pharmacist_id', 'name_category',
                                    'description_category')->all();

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pharmacists = Pharmacist::all();
        return view('categories.create', compact('pharmacists'));
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
            'name_category' => 'required|max:30',
            'description_category' => 'required|max:255',
        ],
        [
            'pharmacist_id.required' => 'Choississez le pharmacist correspondate svp !',
            'name_category.required' => 'Veuillez compléter le champ nom categorie svp ! max 30 caracteres',
            'description_category.required' => 'Veuillez compléter le champ descripton svp ! ',            
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')->with('message', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Pharmacist $pharmacist)
    {
        $category_show = Category::find($id);

        return view('categories.show', compact('category_show', 'pharmacist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Pharmacist $pharmacist_all)
    {
        $category_edit = Category::find($id);
        return view('categories.index', compact('category_edit', 'pharmacist_all'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category_update)
    {
        $request->validate([

            'pharmacist_id' => 'required',
            'name_category' => 'required|max:30',
            'description_category' => 'required|max:255',
        ],
        [
            'pharmacist_id.required' => '',
            'name_category.required' => '',
            'description_category.required' => '',
        ]);

        $category_update->update($request->all());

        return redirect()->route('categories.index')->with('message', 'mondifiée avec succès avec succèsCategorie mondifiée avec succès');
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

    public function delete_category($id)
    {
        $category_delete = Category::find($id);
        $category_delete->delete();

        return back()->with('message', 'Categorie supprimer avec succès');
    }
}
