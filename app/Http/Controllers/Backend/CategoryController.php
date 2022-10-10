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
        $categories = Category::get();

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
    public function edit($id)
    {
        $category = Category::find($id);
        $pharmacist_all = Pharmacist::all();

        return view('categories.index', compact('category', 'pharmacist_all'));
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
        $request->validate([

            'pharmacist_id' => 'required',
            'name_category' => 'required|max:30',
            'description_category' => 'required|max:255',
        ]);
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

    }
}
