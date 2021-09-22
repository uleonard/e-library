<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        /*$module = new Module;
        $module->code = "ECN-122";
        $module->name = "Economics 2";
        $module->year_offered = "1";
        $module->save();
        
       // $module = Module::find(1);   
        $classIds = [6];
        $module->classes()->attach($classIds);
        */

        /*
        $class = new Classes;
        $class->code = "EH1";
        $class->name = "EH 1";
        $class->programme_id = 0;
        $class->save();
        */

        
        $class = Classes::find(15);   
        $moduleIds = [5,6,18,19,24,32,35,56,57,108,109,147];
        $class->modules()->attach($moduleIds);
        
        
        /*
        $module = Module::find(3);
        foreach($module->classes as $class)
        {
            echo $class->code . "<br>";
        }
        */

        /*
        $class = Classes::find(14);
        foreach($class->modules as $module)
        {
            echo $module->code . " : " . $module->name . "<br>";
        }
        */
        
    }

    public function module_ids()
    {
        $ids = Module::select("id")
                ->whereIn('code', 
                [
                    "MTS-BUM-111",
"LAN-COS-111",
"BUS-ECN-111",
"ACC-FIA-111",
"BUS-OBE-111",
"CIT-INS-111",
"MTS-BUM-122",
"BUS-ECN-122",
"ACC-FIA-122",
"CIT-ITP-121",
"TED-PED-121",
"LAN-COS-122"
                ])
                ->get();
      
        echo "[";
        foreach($ids as $id)
        {
            echo $id->id . ",";
        }
        echo "]";
       

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
