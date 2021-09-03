@extends('manager.main')
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
        <a class="nav-link" href="dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        View
    </div>

    <!-- Nav Item - View Projects -->
    <li class="nav-item">
        <a class="nav-link" href="../view_projects">
            <i class="fas fa-fw fa-table"></i>
            <span>View Projects</span>
        </a>
    </li>

    <!-- Nav Item - View Progress -->
    <li class="nav-item">
        <a class="nav-link" href="../view_progress">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>View Progress</span>
        </a>
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

@include('includes.manager_topnav')                 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Comment on {{$projects->project_title}} Project</h1>
                    </div>

                    {{-- register project form --}}
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-5 d-none d-lg-block" style="background-image: url({{asset('images/photo_1.jpg')}})"></div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Comment Project</h1>
                                            </div>
                                            
                                            <form method="POST" action="{{ route('postcomment', [$projects->id]) }}">
                                                @csrf
                                            <p align="center" style="color: red">All fields marked with * are required</p>  
                        
                                            @if (session('success'))
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                  {{session('success')}}
                                              </div>
                                            @endif

                                                {{-- project name --}}
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user @error('project_title') is-invalid @enderror" name="project_title" value="{{$projects->project_title}}" required readonly placeholder="Project Title *">
                                                    @error('project_title')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                {{-- comment --}}
                                                <div class="form-group">
                                                    <textarea class="form-control form-control-user @error('comment') is-invalid @enderror" name="comment" value="" required placeholder="Comment *"></textarea>
                                                    @error('comment')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                                    {{ __('Post Comment') }}
                                                </button>
                                            </form>
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