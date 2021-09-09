<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use\Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
        {
            $this->middleware('auth');
        }
        
    public function index()
    {
        return view('employee.register_projects');
    }

    public function ManagerProject()
    {
        $projects = Project::with('user')->get();
        return view('manager.view_projects')->with('projects', $projects);
    }

    public function EmployeeProject()
    {
        $projects = Auth::user()->projects;
        return view('employee.view_projects',compact('projects'));
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
        {
            $projects = Project::create([
            'user_id' => Auth::user()->id,
            'project_title' => $request->project_title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
        ]);
        
        $applicantId = $projects->id;
        $request->session()->flash('success', 'Project registered successfully. Please add the current project status.');
        return redirect()->route('employee.add_status', ['id' => $applicantId]);
        $applicantId->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $projects = DB::table('projects')->where('id',$id)->first();;
        return view('employee.edit_project',compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('projects')->where('id',$request->id)->update([
            'project_title' => $request->project_title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
            ]);

            $request->session()->flash('success', 'Project updated successfully!');
            return redirect()->back();
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('projects')->where('id',$id)->delete();
        return back()->with('post deleted','post deleted successfully');
    }
}
