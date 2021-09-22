<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    
     public function storeSessionData(Request $request) {
        
        $request->session()->put('student_id','BIT/20/SS/005');
        $request->session()->put('student_name','Joseph Chikawo');
        $request->session()->put('class','BIS1');
       
     }
     public function deleteSessionData(Request $request) {
        $request->session()->forget('student_id');
        $request->session()->forget('student_name');
        $request->session()->forget('class');
     }
    
}
