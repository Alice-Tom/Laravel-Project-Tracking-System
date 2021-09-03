@extends('employee.main')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-clipboard-list"></i>
        </div>
        <div class="sidebar-brand-text mx-3">P T S</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="../dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Register Project Menu -->
    <li class="nav-item">
        <a class="nav-link" href="../register_project">
            <i class="fas fa-fw fa-folder"></i>
            <span>Register Project</span>
        </a>
    </li>

    <!-- Nav Item - Project Status Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="../add_status">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Update Project Status</span>
        </a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        View
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="../comments">
            <i class="fas fa-fw fa-comments"></i>
            <span>Check Comments</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="../view_projects">
            <i class="fas fa-fw fa-table"></i>
            <span>View Projects</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="../view_progress">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>View Progress</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->    

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

@include('includes.employee_topnav')                 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">{{$projects->project_title}}'s Project Progress</h1>
                    </div>

                    {{-- add project progress form --}}
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-5 d-none d-lg-block" style="background-image:url(../../images/projectgif.gif)"></div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Add Project Status</h1>
                                            </div>

                                            <form method="POST" action="{{ route('poststatus', [$projects->id]) }}">
                                                @csrf
                                            <p align="center" style="color: red">All fields marked with * are required</p>  
                        
                                            @if (session('success'))
                                              <div class="alert alert-success alert-dismissible" role="alert">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                  {{session('success')}}
                                              </div>
                                            @endif

                                                {{-- project name
                                                <div class="form-group">
                                                        <input type="text" class="form-control @error('project_title') is-invalid @enderror" name="project_title" value="{{$projects->project_title}}" required>
                                                        @error('project_title')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                </div> --}}

                                                {{-- project status --}}
                                                <div class="form-group">
                                                        <select class="form-control @error('status') is-invalid @enderror" name="status" value="" required> 
                                                                @error('status')
                                                                    <div class="alert alert-danger">
                                                                        {{ $message }}
                                                                    </div>
                                                                 @enderror
                                                                <option value="Status" disabled selected hidden>Status *</option>
                                                                <option value="System Plannign and Selection">System Plannign and Selection</option>
                                                                <option value="System Analysis">System Analysis</option>
                                                                <option value="System Design">System Design</option>
                                                                <option value="System Implementation and Prototype Testing">System Implementation and Prototype Testing</option>
                                                        </select>
                                                </div>
                                                {{-- <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="password" class="form-control form-control-user"
                                                            id="exampleInputPassword" placeholder="Password">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="password" class="form-control form-control-user"
                                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                                    </div>
                                                </div> --}}
                                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                                    {{ __('Add Status') }}
                                                </button>
                                            </form>
                                            {{--<hr>
                                             <div class="text-center">
                                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                                            </div>
                                            <div class="text-center">
                                                <a class="small" href="login.html">Already have an account? Login!</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     {{-- end of form  --}}
                       

    </div>
        <!-- End of Main Content -->

@include('includes.footer') 

     </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
@endsection