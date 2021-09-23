<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Book;
use App\Models\Module;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        if(!$request->session()->has('class'))
         {
            return Redirect('/'); 
            
         }
        $class_code =  $request->session()->get('class');
        $class = Classes::where('code',$class_code)->first();
        //$class = Classes::find(14);
       
        return view('students.dashboard',['row' => $class]);
        
        
    }

    public function books_listing($id)
    {
        $module = Module::find($id);

        /**
         * First check that the module belongs to the student's class
         */
        $class_found = 0;
        foreach($module->classes as $class)
        {
            if($class->code==session('class'))/** PLEASE RETRIEVE THE CLASS FROM SESSION */
                $class_found = 1;
        }

        
        //$module = Module::find($id);
        //$books = Book::where('module_id',$id)->get();
        if($class_found==0)
            return Redirect('/students/dashboard');  
        return view('students.books-listing',['module'=>$module]);
        
        
    }
    public function papers_listing($id)
    {
        
        

        //Storage::disk('local')->put('past-papers/example.txt', 'Contents');
        
        $module = Module::find($id);

        /**
         * First check that the module belongs to the student's class
         */
        $class_found = 0;
        foreach($module->classes as $class)
        {
            if($class->code==session('class'))/** PLEASE RETRIEVE THE CLASS FROM SESSION */
                $class_found = 1;
        }
      
        if($class_found==0)
            return Redirect('/students/dashboard');  
        return view('students.past-papers-listing',['module'=>$module]);
        
        
    }

}
