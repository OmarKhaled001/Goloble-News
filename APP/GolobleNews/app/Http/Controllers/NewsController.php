<?php

namespace App\Http\Controllers;
use App\Models\Editor;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create()
    {
        // set page setting 
        $pageTitle = "add new news";
        // get all editors 
        $allEditors = Editor::all();
        // get all categories 
        $allCategories = Category::all();
        // load view and pass data to my view 
        return view("control.cpanel.news.add", array(
            "pageTitle"=>$pageTitle,
            "allEditors"=>$allEditors,
            "allCategories"=>$allCategories
        ));
    }
    public function store(Request $request)
    {
        // check data valid or not 
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'id_editor' => 'required|numeric',
            'id_category' => 'required|numeric',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // rename orignal name 
        $imageName = time().'.'.$request->main_image->extension(); 
        // move to upload path 
        $request->main_image->move(public_path('upload'), $imageName);
        // create new object 
        $news  = new News();
        // set data to news 
        $news->title = $request->title;
        $news->content = $request->content;
        $news->id_editor = $request->id_editor;
        $news->id_category = $request->id_category;
        $news->main_image = $imageName;
        // save news into database 
        if($news->save()){
            return redirect()->back()->with('message', 'success');  
        }else{
            return redirect()->back()->withErrors(['message' => 'fail']);
        }
    }
    public function all()
    {
        // set page setting 
        $pageTitle = "show all news";
        // get All News 
        $allNews = News::all();
        // load view and pass data to my view 
        return view("control.cpanel.news.all", array(
            "pageTitle"=>$pageTitle,
            "allNews"=>$allNews
        ));
    }
    public function delete($id)
    {
        // get news by id 
        $news = News::find($id);
        if($news->delete()){
            return redirect()->back()->with('message', 'success');   
        }else {
            return redirect()->back()->withErrors(['message' => 'fail']);
        }
    }
    public function show($id)
    {
        // set page setting 
        $pageTitle = "display news";
        // get news by id 
        $news = News::find($id);
        // get all editors 
        $allEditors = Editor::all();
        // get all categories 
        $allCategories = Category::all();
        // load view and pass data to my view 
        return view("control.cpanel.news.edit", array(
            "pageTitle"=>$pageTitle,
            "news"=>$news,
            "allEditors"=>$allEditors,
            "allCategories"=>$allCategories
        ));
    }
    public function update($id, Request $request) 
    {
        if(isset($request->main_image)){
            // check data valid or not 
            $validated = $request->validate([
                'title' => 'required',
                'content' => 'required',
                'id_editor' => 'required|numeric',
                'id_category' => 'required|numeric',
                'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            // rename orignal name 
            $imageName = time().'.'.$request->main_image->extension(); 
            // move to upload path 
            $request->main_image->move(public_path('upload'), $imageName);
            // create new object 
            $news  = News::find($id);
            // set data to news 
            $news->title = $request->title;
            $news->content = $request->content;
            $news->id_editor = $request->id_editor;
            $news->id_category = $request->id_category;
            $news->main_image = $imageName;
            // save news into database 
            if($news->save()){
                return redirect()->back()->with('message', 'success');  
            }else{
                return redirect()->back()->withErrors(['message' => 'fail']);
            }
        }else{
            // check data valid or not 
            $validated = $request->validate([
                'title' => 'required',
                'content' => 'required',
                'id_editor' => 'required|numeric',
                'id_category' => 'required|numeric',
            ]);
            // create new object 
            $news  = News::find($id);
            // set data to news 
            $news->title = $request->title;
            $news->content = $request->content;
            $news->id_editor = $request->id_editor;
            $news->id_category = $request->id_category;
            // save news into database 
            if($news->save()){
                return redirect()->back()->with('message', 'success');  
            }else{
                return redirect()->back()->withErrors(['message' => 'fail']);
            }
        }
    }
}
