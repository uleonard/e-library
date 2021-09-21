<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Classes;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module = new Module;
        $module->code = "ECN-122";
        $module->name = "Economics 2";
        $module->year_offered = "1";
        $module->save();
        
       // $module = Module::find(1);   
        $classIds = [6];
        $module->classes()->attach($classIds);
        

        /*
        $class = new Classes;
        $class->code = "EH1";
        $class->name = "EH 1";
        $class->programme_id = 0;
        $class->save();
        
       // $module = Module::find(1);   
        $moduleIds = [3];
        $class->modules()->attach($moduleIds);
        */
        
        /*
        $module = Module::find(3);
        foreach($module->classes as $class)
        {
            echo $class->code . "<br>";
        }
        */

        /*
        $class = Classes::find(1);
        foreach($class->modules as $module)
        {
            echo $module->name . "<br>";
        }
        */
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //
    }
}
