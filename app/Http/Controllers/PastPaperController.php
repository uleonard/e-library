<?php

namespace App\Http\Controllers;

use App\Models\PastPaper;
use App\Models\Module;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class PastPaperController extends Controller
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
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module = Module::find($request->module_id);
        $filename = $module->code."_year-".$request->year . "_sem-" . $request->semester . "." . $request->attachment->extension();;
        $path = $request->file('attachment')->storeAs(
            'past-papers', $filename
        );
       

        $paper = new PastPaper;
        $paper->module_id = $request->module_id;
        $paper->year = $request->year;
        $paper->semester = $request->semester;
        $paper->attachment = $path;
        $paper->save();

        return Redirect('/modules');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PastPaper  $pastPaper
     * @return \Illuminate\Http\Response
     */
    public function show(PastPaper $pastPaper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PastPaper  $pastPaper
     * @return \Illuminate\Http\Response
     */
    public function edit(PastPaper $pastPaper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PastPaper  $pastPaper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PastPaper $pastPaper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PastPaper  $pastPaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(PastPaper $pastPaper)
    {
        //
    }

    public function download($id)
    {
        $paper = PastPaper::find($id);
        return Storage::download($paper->attachment);
    }
    public function view($id)
    {
        
        $paper = PastPaper::find($id);
/*
        $contents = Storage::get($paper->attachment);
        //echo $contents;
        //return response()->file($paper->attachment);
        return view('students.view-past-paper',['paper' => $paper,'contents' => $contents]);

        */
        
        //readfile("past-papers/".$filename);

        $file_path=$paper->attachment;
        if (!Storage::disk('local')->exists($file_path)) {
            abort(404);
        }

  //$local_path = config('filesystems.disks.local.root') . DIRECTORY_SEPARATOR . $file_path;
        $local_path = $file_path;

        //return response()->file($local_path);

        return view('students.view-past-paper',['paper' => $paper,'contents' => $local_path]);
        
        //echo Storage::url($file_path);
    }
}
