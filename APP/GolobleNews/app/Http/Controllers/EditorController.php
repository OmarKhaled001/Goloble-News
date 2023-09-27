<?php

namespace App\Http\Controllers;

use App\Models\Editor;
use Illuminate\Http\Request;

class EditorController extends Controller
{
 
    public function create()
    {
        // set page Setting 
        $pageTitle = "add new editor";
        // load view and pass data to view 
        return view("control.cpanel.editor.add", array(
            "pageTitle"=>$pageTitle
        ));
    }
    public function store(Request $request)
    {
        // check data valid or not 
        $validated = $request->validate([
            'name' => 'required',
            'salary' => 'required|numeric',
        ]);
        // create new object 
        $editor = new Editor();
        // set data to editor object 
        $editor->name = $request->name;
        $editor->salary = $request->salary;
        // save object into database
        if($editor->save()){
            return redirect()->back()->with('message', 'success');  
        }else{
            return redirect()->back()->withErrors(['message' => 'fail']);
        }
    }
    public function all()
    {
        // set page setting 
        $pageTitle = "show all editors";
        // get all editors 
        $allEditors = Editor::all();
        // load view and pass data to my view 
        return view("control.cpanel.editor.all", array(
            "pageTitle"=>$pageTitle,
            "allEditors"=>$allEditors
        ));
    }
    public function delete($id)
    {
        // get editor by id 
        $editor = Editor::find($id);
        if($editor->delete()){
           return redirect()->back()->with('message', 'success');   
        }else {
            return redirect()->back()->withErrors(['message' => 'fail']);
        }
    }
    public function show($id)
    {
        // set page setting 
        $pageTitle = "show editor info";
        // get editor by id 
        $editor = Editor::find($id);
        // load view and pass data to view 
        return view("control.cpanel.editor.edit", array(
            "pageTitle"=>$pageTitle,
            "editor"=>$editor
        ));
    }
    public function update($id, Request $request) 
    {
        // check data valid or not 
        $validated = $request->validate([
            'name' => 'required',
            'salary' => 'required|numeric',
        ]);
        // get editor 
        $editor = Editor::find($id);
        // set data to editor object 
        $editor->name = $request->name;
        $editor->salary = $request->salary;
        // save object into database
        if($editor->save()){
            return redirect()->back()->with('message', 'success');  
        }else{
            return redirect()->back()->withErrors(['message' => 'fail']);
        }
    }
}
