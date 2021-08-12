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
                        <h1 class="h3 mb-0 text-gray-800">{{$employee->full_name}}'s Profile </h1>
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
                                                <h1 class="h4 text-gray-900 mb-4">My profile</h1>
                                            </div>
                                            
                                            <form method="POST" action="{{ route('updateprofile', [$employee->id]) }}">
                                                @csrf
                                            <p align="center" style="color: red">All fields marked with * are required</p>  
                        
                                            @if (session('success'))
                                              <div class="alert alert-success" role="alert">
                                                  {{session('success')}}
                                              </div>
                                            @endif

                                                {{-- full name --}}
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user @error('full_name') is-invalid @enderror" name="full_name" value="{{$employee->full_name}}" required>
                                                    @error('full_name')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                {{-- email --}}
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{$employee->email}}" required>
                                                        @error('email')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                </div>

                                                {{-- password --}}
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" value="" required placeholder="Password *">
                                                        @error('password')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    {{-- phone number --}}
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-control-user @error('phone_number') is-invalid @enderror" name="phone_number" value="{{$employee->phone_number}}" required>
                                                        @error('phone_number')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- designation --}}
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user @error('designation') is-invalid @enderror" name="designation" value="{{$employee->designation}}" required>
                                                    @error('designation')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                                    {{ __('Update Profile') }}
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

@endsection