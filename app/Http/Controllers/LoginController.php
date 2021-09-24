<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
           // $this->set_user_data(Auth::user());
            return redirect()->intended('dashboard');
        }

        /*
        return back()->withErrors([
            'message' => 'The provided credentials do not match our records.',
        ]);
        */

        return Redirect('students/login')->with([
            'username'=>$request->username, 
            'password'=>$request->password
            ]);

    }
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
    public function students_login()
    {
        //die(session('username'));
        
        /*
        $row =  Http::post('http://localhost/test/example.php', [
            'username' => session('username'),
            'password' => session('password'),
        ]);
        */
        
        //$row =  Http::post('http://evaluation.poly.ac.mw/auth.php', [
        $row =  Http::post('http://masterpiecemw.com/authenticate.php', [        
            'username' => session('username'),
            'password' => session('password'),
        ]);
        
       if(isset($row['class']))
       {
        
        session(['user'=>$row['username']]);
        //die(session('username'));
        session(['class'=>$row['class']]);
        session(['firstname'=>$row['firstname']]);   
        session(['surname'=>$row['surname']]);
        session(['role'=>$row['user_role']]);
        session(['student_reg_number'=>$row['student_reg_number']]);
        session(['gender'=>$row['gender']]);
        session(['programme'=>$row['programme']]);
        session(['department'=>$row['department']]);
        session(['student_type'=>$row['student_type']]);

        return Redirect('students/dashboard');  
       }
       
            
       return Redirect('/')->withErrors([
                'message' => 'The provided credentials do not match our records.',
            ]);
    }

   

   
}
