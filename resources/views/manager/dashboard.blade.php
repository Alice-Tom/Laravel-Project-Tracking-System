@extends('manager.main')
@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

@include('includes.manager_sidebar')     

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

@include('includes.manager_topnav')                 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Documentation card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                system planning and selection stage</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$projects->count()}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- System analysis and design card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                System analysis stage</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sysstem implementation card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                System design stage
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-table fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Report writing card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                System implementation and prototype testing stage</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">9</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">OTHER</div>
                                            <a class="dropdown-item" href="view_projects">VIEW PROJECTS</a>
                                            <a class="dropdown-item" href="view_progress">VIEW PROGRESS</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="dashboard">HOME</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                              <h1> TOTAL PROJECTS</h1></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><h1>{{$projects->count()}}</h1></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    {{-- <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div classzz="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Project Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">OTHER</div>
                                            <a class="dropdown-item" href="view_projects">VIEW PROJECTS</a>
                                            <a class="dropdown-item" href="view_progress">VIEW PROGRESS</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="dashboard">HOME</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                


                                {{-- <div class="card-body">
                                //     <div class="chart-pie pt-4 pb-2">
                                //         <canvas id="myPieChart"></canvas>
                                //     </div>
                                //     <div class="mt-4 text-center small">
                                //         <span class="mr-2">
                                //             <i class="fas fa-circle text-primary"></i> Planning
                                //         </span>
                                //         <span class="mr-2">
                                //             <i class="fas fa-circle text-secondary"></i> Analysis
                                //         </span>
                                //         <span class="mr-2">
                                //             <i class="fas fa-circle text-success"></i> Design
                                //         </span>
                                //         <span class="mr-2">
                                //             <i class="fas fa-circle text-info"></i> Implementation
                                //         </span>
                                //     </div>
                                // </div> --}}
                            </div>
                        </div>
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
                                        <th>Employee Name</th>
                                        <th>Start date</th>
                                        <th>Proposed End Date</th>
                                        <th>Description</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Employee Name</th>
                                        <th>Start date</th>
                                        <th>Proposed End Date</th>
                                        <th>Description</th>
                                        <th>Comment</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        @foreach ($projects as $project) 
                                        <td>{{$project->project_title}}</td>
                                        <td>{{$project->user->full_name}}</td>
                                        <td>{{$project->start_date}}</td>
                                        <td>{{$project->end_date}}</td>
                                        <td>{{$project->description}}</td>
                                        <td><a class="btn btn-primary btn-icon-split" href="comment/{{$project->id}}">
                                            <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                            </span>
                                        <span class="text">Comment</span>
                                        </a>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

    {{-- <!-- Logout Modal-->
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
    </div> --}}
@endsection