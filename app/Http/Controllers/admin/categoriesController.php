<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class categoriesController extends Controller
{
    //
    public function cat(){
        
        $categories = category::orderby('id','desc')->get();
        return view('admin.category.list', compact('categories'));
    }

    public function add(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $category = new category;
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }
    public function destroy($id){
        $category = category::find($id);
        $category->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }
    public function edit($id){
        $category = category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update($id , Request $request){
        $category = category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect(route('admin.categories'))->with('message','Updated Category Successffully');
    }
}
