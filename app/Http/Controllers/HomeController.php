<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
       $title="About us-Online Store";
       $subtitle="About us Page";
       $description="This is an About us Page...";
       $author ="developed by:FirstName LastNmae";

       return view('home.about')->with('title',$title)
       ->with('subtitle',$subtitle)
       ->with('description',$description)
       ->with('author',$author);
      
        //
    }
    public function index()
    {
       $title="Home -Online Store";
       $subtitle="Major Categories on our Shope";

       $imageUrls=['https://placehold.co/350',
       'https://placehold.co/350',
       'https://placehold.co/350'];

       return view('home.index')->with('title',$title)
       ->with('subtitle',$subtitle)
       ->with('imageUrls',$imageUrls);
    }
}
