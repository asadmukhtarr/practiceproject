<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
class pagesController extends Controller
{
    // home
    public function home(){
        $categories = category::all();
        return $categories;
        //return view('welcome');
    }
    // about
    public function about(){
        return view('about');
    }
    // contact
    public function contact(){

        return view('contact');
    }
}
