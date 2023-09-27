<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class ViewController extends Controller
{
public function index()
{
    // set page setting 
    $pageTitle = "newspaper";
    // get all news 
    $allNews = News::latest()->get();
    // load view and pass data to my view 
    return view("control.front.home", array(
        "pageTitle"=>$pageTitle,
        "allNews"=>$allNews
    ));
}
public function category($id)
{
    // set page setting 
    $pageTitle = "display news";
    // get all news for specfic category 
    $allNews = News::where("id_category", $id)->orderBy('id', 'desc')->paginate(6);
    // load view and pass data to my view 
    return view("control.front.category", array(
        "pageTitle"=>$pageTitle,
        "allNews"=>$allNews
    ));
}
public function news($id)
{
    // set page setting 
    $pageTitle = "show news info";
    // get all news for specfic category 
    $allNews = News::orderBy('id', 'desc')->paginate(8);
    // get news by id 
    $news = News::find($id);
    // load view and pass data to my view 
    return view("control.front.news", array(
        "pageTitle"=>$pageTitle,
        "news"=>$news,
        "allNews"=>$allNews

    ));
}
}
