<?php

namespace App\Http\Controllers;
use App\Models\Editor;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        // set page setting 
        $pageTitle = "add new category";
        // get all editors 
        $allEditors = Editor::all();
        // load view and pass data to my view 
        return view("control.cpanel.category.add", array(
            "pageTitle"=>$pageTitle,
            "allEditors"=>$allEditors
        ));
    }
    public function store(Request $request)
    {
        // check data valid or not 
        $validated = $request->validate([
            'name' => 'required',
            'id_manager' => 'required|numeric',
        ]);
        // create new object 
        $category = new Category();
        // set data to editor object 
        $category->name = $request->name;
        $category->id_manager = $request->id_manager;
        // save object into database
        if($category->save()){
            return redirect()->back()->with('message', 'success');  
        }else{
            return redirect()->back()->withErrors(['message' => 'fail']);
        }
    }
    public function all()
    {
        // set page setting 
        $pageTitle = "show all categories";
        // get all categories
        $allCategories = Category::all();
        // load view and pass data to view 
        return view("control.cpanel.category.all", array(
            "pageTitle"=>$pageTitle,
            "allCategories"=>$allCategories
        ));
    }
    public function delete($id)
    {
        // get category by id 
        $category = Category::find($id);
        if($category->delete()){
           return redirect()->back()->with('message', 'success');   
        }else {
            return redirect()->back()->withErrors(['message' => 'fail']);
        }
    }
    public function show($id)
    {
        // set page setting 
        $pageTitle = "show category info";
        // get Category by id 
        $category = Category::find($id);
        // get all editors 
        $allEditors = Editor::all();
        // load view and pass data to my view 
        return view("control.cpanel.category.edit",array(
            "pageTitle"=>$pageTitle,
            "category"=>$category,
            "allEditors"=>$allEditors
        ));
    }
    public function update($id, Request $request) 
    {
        // check data valid or not 
        $validated = $request->validate([
            'name' => 'required',
            'id_manager' => 'required|numeric',
        ]);
        //get category 
        $category = Category::find($id);
        // set data to editor object 
        $category->name = $request->name;
        $category->id_manager = $request->id_manager;
        // save object into database
        if($category->save()){
            return redirect()->back()->with('message', 'success');  
        }else{
            return redirect()->back()->withErrors(['message' => 'fail']);
        }
    }
}
