<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Book;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        if(!$request->session()->has('class'))
         {
            return Redirect('login'); 
            ;
         }
        $class_code =  $request->session()->get('class');
        $class = Classes::where('code',$class_code)->first();
        //$class = Classes::find(14);
       
        return view('students.dashboard',['row' => $class]);
        
        
    }

    public function books_listing($id)
    {
        
       $books = Book::where('module_id',$id)->get();
        return view('students.books-listing',['rows'=>$books]);
        
        
    }

}
