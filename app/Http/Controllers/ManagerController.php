<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Status;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manager.dashboard');
    }

    public function ManagerProject(Request $request)
    {
        $projects = Project::with('user')->get();
        $planning = Status::where('status','=','System Plannign and Selection')->get()->count();
        $analysis = Status::where('status','=','System Analysis')->get()->count();
        $design = Status::where('status','=','System Design')->get()->count();
        $implementation = Status::where('status','=','System Implementation and Prototype Testing')->get()->count();
        return view('manager.dashboard',compact('projects','planning','analysis','design','implementation'));
    }
    

    // public function echart(Request $request)
    // {
    //     $planning = Status::where('status','System Plannign and Selection')->get();
    //     $analysis = Status::where('status','System Analysis')->get();
    //     $design = Status::where('status','System Design')->get();
    //     $implememntation = Status::where('status','System Implementation and Prototype testing')->get();
    // 	$planning_count = count($planning);    	
    // 	$analysis_count = count($analysis);
    // 	$design_count = count($design);
    // 	$implememntation_count = count($implememntation);
    // 	return view('manager.dashboard',compact('planning_count','analysis_count','design_count','implememntation_count'));
    // }


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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
