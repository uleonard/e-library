<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ActivityTracking;
use App\Classes\ActivityLog;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $data = [
            'name'=>'Main Admin',
            'username'=>'admin',
            'password'=>'admin',
            'role_id'=>1
        ];
        */
        $data = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'role_id' => ['required'],
        ]);

        User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function dashboard()
    {
        //$rows = Http::post('http://localhost/test/example.php');
        /*
        $rows = Http::post('http://localhost/test/example.php', [
            'username' => 'uleonard',
            'password' => '123456',
        ]);
        */

        /*
        $rows = Http::retry(3,500)->post('http://masterpiecemw.com/example.php', [
            'name' => 'Admin',
        ]);
          */  
        //$rows = Http::get('http://localhost/test/example.php?name=Admin');
       
        
        //return $response;
       // die();
      
       //die($rows);

       //session(['class'=>$rows['class']]);

     /*  
        $log_data = [
                        'username' => session('user'),
                        'firstname' => session('firstname'),
                        'surname' => session('surname'),
                        'gender' => session('gender'),
                        'activity_type' => "VIEW",
                        'activity_desc' => "Viewed library staff dashboard page",
                        'user_role' => session('user_role'),
                        'student_reg_number' => session('student_reg_number'),
                        'class' => session('class'),
                        'programme' => session('programme'),
                        'department' => session('department'),
                    ];       
       
        ActivityLog::log($log_data);
        */

        //return view('dashboard',['rows'=>$rows]);

        
        $downloads = ActivityTracking::where('activity_type','DOWNLOAD')->count();
        $generic = ActivityTracking::where('student_type','Generic')->count();
        $mature = ActivityTracking::where('student_type','Mature')->count();
        $stat = [
            'downloads'=>$downloads,
            'generic'=>$generic,
            'mature'=>$mature,
        ];
        
        return view('dashboard',['stat'=>$stat]);
    }
}
