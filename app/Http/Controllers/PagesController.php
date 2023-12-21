<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
    //
    public function contact()
    {
        return view('pages.contact',['name'=>'Jone Doe',
        'role'=>'Web Developer',
            "Company"=>"XYZ compay",
           'quote'=>"Pause and ponder in the silence",
        ]);
        //
    }
    public function display($view)
    {
        if (view::exists($view)){
        echo $view.":This view exists";
    }
      else{
      
      echo $view.":This view exists";
      }
    
        //
    }
}
