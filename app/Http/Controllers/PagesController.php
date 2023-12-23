<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View; 

use Illuminate\Http\Request;


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
        if (View::exists($view)){
        echo $view.":This view exists";
    }
      else{
      
      echo $view.":This view does not exists";
      }
    
        //
    }
    public function employees()
    {
        return view('pages.employees',
        [
            'employee1'=>['Jone Doe1','Web Developer','ABC compay','fusce porta','maruise cxzcz mmgh'],
            'employee2'=>['Jone Doe2','Web Developer1222','ABC compay222','fusce porta22','maruise cxzcz mmgh22'],
            'employee3'=>['Jone Doe3','Web Developer33','ABC compay33','fusce porta33','maruise cxzcz mmgh33']
        ]);      
    
        //
    }
    public function contact1()
    {
        return view('pages.contact1',['name'=>'Jone Doe',
        'role'=>'Web Developer',
            'company'=>"XYZ compay",
           'quote'=>"Pause and ponder in the silence"
        ]);
}
public function contact2($display)
    {
 return view('pages.contact2',
 ['displaycontact'=>$display,
        'name'=>'Jone Doe',
        'role'=>"Web Developer",
        'company'=>"XYZ compay",
        'quote'=>"Pause and ponder in the silence"
        ]);
}
public function employee_list_for()
{
   
    $employees=  [
        ['Jone Doe1','Web Developer','ABC compay','fusce porta','maruise cxzcz mmgh'],
        ['Jone Doe2','Web Developer1222','ABC compay222','fusce porta22','maruise cxzcz mmgh22'],
        ['Jone Doe3','Web Developer33','ABC compay33','fusce porta33','maruise cxzcz mmgh33']
    ];  
    return view('pages.employee_list_for')->with('employees',$employees);
    //
}
}