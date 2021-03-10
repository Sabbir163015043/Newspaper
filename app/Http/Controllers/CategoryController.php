<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.add');
    }
    public function create(Request $request)
    {
        $category = new Category();
        $category ->name = $request->name;
        $category ->status = $request->status;
        $category->save();

        return redirect()->back()->with('message','Category Info Create Successfully');
    }
    public function manage()
    {
        return view('admin.category.manage',[
            'categories' => Category::all()
        ]);
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',['category' => $category]);
    }
    public function update(Request $request)
    {
        $category = Category ::find($request->id);
        $category ->name = $request->name;
        $category ->status = $request->status;
        $category->save();

        return redirect('/manage-category')->with('message','Category Update Successfully');


    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('/manage-category')->with('message','Category Delete Successfully');

    }
}





