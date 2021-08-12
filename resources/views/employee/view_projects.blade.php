@extends('employee.main')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

@include('includes.employee_sidebar')     

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

@include('includes.employee_topnav')                 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">{{$projects->count()}} Projects</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Print</a>
                    </div>

            <!-- DataTales Example -->
            <div class="row">
            <div class="container-fluid">       
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Registered Projects</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Start date</th>
                                    <th>Proposed End Date</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Start date</th>
                                    <th>Proposed End Date</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    @foreach ($projects as $project) 
                                        <td>{{$project->project_title}}</td>
                                        <td>{{$project->start_date}}</td>
                                        <td>{{$project->end_date}}</td>
                                        <td>{{$project->description}}</td>
                                        <td>
                                            <a class="btn btn-primary btn-icon-split" href="edit_project/{{$project->id}}">
                                            <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                            </span>
                                        <span class="text">Edit</span>
                                        </a>
                                        &nbsp
                                    
                                        <a class="btn btn-danger btn-icon-split" onclick="return confirm('Are you sure you want to delete {{$project->project_title}} project?')" href="deleteproject/{{$project->id}}">
                                            <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                            </span>
                                        <span class="text">Delete</span>
                                        </a> 
                                        {{-- <a class="btn btn-info btn-icon-split" href="edit_status/{{$project->id}}">
                                            <span class="icon text-white-50">
                                            <i class="fas fa-plus-square"></i>
                                            </span>
                                        <span class="text">Edit Status</span>
                                        </a>  --}}
                                        </td>
                                </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
        <!-- /.container-fluid -->

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