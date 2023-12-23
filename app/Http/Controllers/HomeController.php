<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
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
    }*/
    public function about()


    {
 
 
        $viewData = [];
 
 
        $viewData["title"] = "About us - Online Store";
 
 
        $viewData["subtitle"] = "About us";
 
 
        $viewData["description"] = "This is an about page ...";
 
 
        $viewData["author"] = "Developed by: FirstName LastName";
       
        return view('home.about')->with("viewData", $viewData);
 
 
 
 
    }
 
 
    /*
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
    */
    /*public function index()
    {
     
       return view("home.home");
    }*/
    public function index()


   {


       $viewData = [];


       $viewData["title"] = "Home Page - Online Store";


       return view('home.index')->with("viewData", $viewData);
   }

    public function employee_list()
{
   
    $employees=  [
        ['Jone Doe1','Web Developer','ABC compay','fusce porta','maruise cxzcz mmgh'],
        ['Jone Doe2','Web Developer1222','ABC compay222','fusce porta22','maruise cxzcz mmgh22'],
        ['Jone Doe3','Web Developer33','ABC compay33','fusce porta33','maruise cxzcz mmgh33']
    ];  
    return view('home.employee-list')->with('employees',$employees); 
    //
}
public function AddNewMenu()
    {
     
       return view("home.testmenu");
    }
}
