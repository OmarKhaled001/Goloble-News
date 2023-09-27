<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;
use App\Models\Category;
use App\Models\News;
class PageController extends Controller
{
    public function index()
    {
        // set page setting 
        $pageTitle = "Home page";
        // get noof editors
        $noOfEditors = Editor::count();
        // get noof editors
        $noOfCategories = Category::count();
        // get noof editors
        $noOfNews = News::count();
        // load view and pass data to my view 
        return view("control.cpanel.home.home",array(
            "pageTitle"=>$pageTitle,
            "noOfEditors"=>$noOfEditors,
            "noOfCategories"=>$noOfCategories,
            "noOfNews"=>$noOfNews
        ));
    }
}
