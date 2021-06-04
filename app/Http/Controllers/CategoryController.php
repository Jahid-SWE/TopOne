<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.add');
    }

    public function create(Request $request)
    {
        $category = new Category();
        $category->name = $request->a;
        $category->description = $request->b;
        $category->status = $request->c;
        $category->save();

        return redirect()->back()->with('message', 'Category info create successfully');
    }

    public function manage()
    {
        return view('admin.category.manage', ['categories' => Category::all()]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->name = $request->a;
        $category->description = $request->b;
        $category->status = $request->c;
        $category->save();

        return redirect('/manage-category')->with('message', 'Category info update successfully');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/manage-category')->with('message', 'Category info delete successfully');
    }
}
