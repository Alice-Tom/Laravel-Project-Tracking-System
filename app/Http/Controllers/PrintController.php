<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{
    public function index()
    {
        return view('employee.project_print_preview');
    }

    public function EmployeeProject()
    {
        $projects = Auth::user()->projects;
        return view('employee.project_print_preview',compact('projects'));
    }

    public function ManagerProject()
    {
        $projects = Project::with('user')->get();
        return view('manager.project_print_preview')->with('projects', $projects);
    }

    public function EmployeeProgress()
    {
        $statuses = Status::with('project')->get();
        return view('employee.project_download_status')->with('statuses', $statuses);
    }

    public function ManagerProgress()
    {
        $statuses = Status::with('project')->get();
        return view('manager.project_download_status', ['statuses' => $statuses]);
    }
}
