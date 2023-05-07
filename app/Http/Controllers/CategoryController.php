<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('category.index',compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
         //dd($request->name); it print the single data..
        $data = $request->validate([
            'name'=> 'required',
            'priority'=>'required|numeric'
        ]);
        //dd($data); print data
        Categories::create($data);
        return redirect(route('category.index'));
    }
    public function edit($id)
    {
        $category = Categories::find($id);
        return view('category.edit',compact('category'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'priority' => 'required|numeric'
        ]);

        $category = Categories::find($id);
        $category->update($data);
        return redirect(route('category.index'));
    }

    public function destroy($id)
    {
        $category = Categories::find($id);
        $category->delete();
        return redirect(route('category.index'));
    }
}
