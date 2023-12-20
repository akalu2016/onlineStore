<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class TestController extends Controller
{
    //
    public function text()
    {
        return "Welcom To Our Website";
        //
    }
    public function view()
    {
        return view("home");
        //
    }
    public function jsonarray()
    {
        return response()->json([
            "firstname"=>"Jone",
            "lastname"=>"doe",
           "age"=>"56",
        ]);
        //
    }
    public function  array()
    {
        return [1,2,3];
        //
    }
    public function  pdf()
    {
        response()->file(
        public_path('PDF\laravel.pdf'),
        ['Content-type'=>'application/pdf']);
            }
            
    public function  downloadpdf(){
        response()->download(
            public_path('PDF\laravel.pdf'),'laravel site page');
       
    }

    
public function  image(){
response()->file(
    public_path('image\profile-picture.jpeg'));
       
    }
}
