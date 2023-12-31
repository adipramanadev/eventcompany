<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //category data

        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request,[
            'namakategori'=>'required'
        ]);
        //input data
        $category = $request->all();
        //save data
        $save = Category::create($category);
        if ($save) {
            return redirect()->route('category.index')->with('success','Category Created Successfully');
        } else {
            return redirect()->back()->with('errors','Something went wrong');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //get data
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validate
        $this->validate($request,[
            'namakategori'=>'required'
        ]);
        //get data id
        $category = Category::find($id);
        //input data
        $category->namakategori = $request->input('namakategori');
        //save data
        if ($category->save()) {
            return redirect()->route('category.index')->with('success','Category Updated Successfully');
        } else {
            return redirect()->back()->with('errors','Something went wrong');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //delete data
        $category = Category::find($id);
        if ($category->delete()) {
            return redirect()->route('category.index')->with('success','Category Deleted Successfully');
        }else{
            return redirect()->back()->with('errors','Something went wrong');
        }
    }
}
