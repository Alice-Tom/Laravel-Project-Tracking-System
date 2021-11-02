<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Project;
use App\Models\Manager;
use App\Models\Progress;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $projects = DB::table('projects')->where('id',$id)->first();
        return view('employee.add_status',compact('projects'));
    }

    public function ManagerProgress()
    {
        $statuses = Status::with('user', 'project')->get();
        // dd($statuses);
        return view('manager.view_progress', ['statuses' => $statuses]);
    }

    public function EmployeeProgress()
    {
        $statuses = Status::with('project')->get();
        return view('employee.view_progress')->with('statuses', $statuses);
    }


    // $user = User::with('profile')->find(Auth::user()->id); //Show authenticated user own profile details.
	// $profile = $user->profile;
	// //dd($profile); //Just for debugging
    // 	return View::make('users.viewprofile')->with('profile', $profile)->with('user',$user);

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
            $projects = Status::Create([
            'user_id' => Auth::user()->id,
            'project_id'=> $request->id,
            'status' => $request->status,
        ]);

        $request->session()->flash('success', 'Project status successfully added!');
            return redirect()->route('employee.view_projects');
            // return redirect('employee/view_progress');
        }
    }

     public function ReportWriting()
    {
        $status = Manager::table('statuses')->get();
        return view('manager.dashboard',compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function show(Progress $progress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $projects, $id)
    {
        $projects = DB::table('projects')->where('id',$id)->first();;
        return view('employee.edit_status',compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('statuses')->where('id',$request->id)->update([
            'status' => $request->status,
            ]);

            $request->session()->flash('success', 'Status updated successfully!');
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progress $progress)
    {
        //
    }
}
