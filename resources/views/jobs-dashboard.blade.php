<?php $page = 'jobs-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Job Dashboard
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Jobs
        @endslot
        @slot('li_3')
            Job Dashboard
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-briefcase"></i></span>
                    <div class="dash-widget-info">
                        <h3>110</h3>
                        <span>Jobs</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-users"></i></span>
                    <div class="dash-widget-info">
                        <h3>40</h3>
                        <span>Job Seekers</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                    <div class="dash-widget-info">
                        <h3>374</h3>
                        <span>Employees</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa-solid fa-paste"></i></span>
                    <div class="dash-widget-info">
                        <h3>220</h3>
                        <span>Applications</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 text-center d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Overview</h3>
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <h3 class="card-title text-center">Latest Jobs</h3>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-action">UI Developer <span
                                        class="float-end text-sm text-muted">1 Hours ago</span></li>
                                <li class="list-group-item list-group-item-action">Android Developer <span
                                        class="float-end text-sm text-muted">1 Days ago</span></li>
                                <li class="list-group-item list-group-item-action">IOS Developer<span
                                        class="float-end text-sm text-muted">2 Days ago</span></li>
                                <li class="list-group-item list-group-item-action">PHP Developer<span
                                        class="float-end text-sm text-muted">3 Days ago</span></li>
                                <li class="list-group-item list-group-item-action">UI Developer<span
                                        class="float-end text-sm text-muted">3 Days ago</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card card-table">
                <div class="card-header">
                    <h3 class="card-title mb-0">Applicants List</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap custom-table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Job Title</th>
                                    <th>Departments</th>
                                    <th>Start Date</th>
                                    <th>Expire Date</th>
                                    <th class="text-center">Job Types</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Resume</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('profile') }}" class="avatar"><img
                                                    src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                            <a href="{{ url('profile') }}">John Doe <span>Web Designer</span></a>
                                        </h2>
                                    </td>
                                    <td><a href="{{ url('job-details') }}">Web Developer</a></td>
                                    <td>Development</td>
                                    <td>3 Mar 2019</td>
                                    <td>31 May 2019</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-danger"></i> Full Time
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-info"></i> Full Time</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-success"></i> Part Time</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-danger"></i> Internship</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-warning"></i> Temporary</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-warning"></i> Other</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-danger"></i> Open
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-info"></i> Open</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-success"></i> Closed</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-danger"></i> Cancelled</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center"><a href="javascript:void(0);"
                                            class="btn btn-sm btn-primary"><i class="fa-solid fa-download me-1"></i>
                                            Download</a></td>
                                    <td class="text-center">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i
                                                        class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                <a href="#" class="dropdown-item"><i
                                                        class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('profile') }}" class="avatar"><img
                                                    src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                                            <a href="{{ url('profile') }}">Richard Miles <span>Web Developer</span></a>
                                        </h2>
                                    </td>
                                    <td><a href="{{ url('job-details') }}">Web Designer</a></td>
                                    <td>Designing</td>
                                    <td>3 Mar 2019</td>
                                    <td>31 May 2019</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-success"></i> Part Time
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-info"></i> Full Time</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-success"></i> Part Time</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-danger"></i> Internship</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-warning"></i> Temporary</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-warning"></i> Other</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-success"></i> Closed
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-info"></i> Open</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-success"></i> Closed</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-danger"></i> Cancelled</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center"><a href="javascript:void(0);"
                                            class="btn btn-sm btn-primary"><i class="fa-solid fa-download me-1"></i>
                                            Download</a></td>
                                    <td class="text-center">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i
                                                        class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                <a href="#" class="dropdown-item"><i
                                                        class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('profile') }}" class="avatar"><img
                                                    src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image"></a>
                                            <a href="{{ url('profile') }}">John Smith <span>Android Developer</span></a>
                                        </h2>
                                    </td>
                                    <td><a href="{{ url('job-details') }}">Android Developer</a></td>
                                    <td>Android</td>
                                    <td>3 Mar 2019</td>
                                    <td>31 May 2019</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-danger"></i> Internship
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-info"></i> Full Time</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-success"></i> Part Time</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-danger"></i> Internship</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-warning"></i> Temporary</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-warning"></i> Other</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-regular fa-circle-dot text-danger"></i> Cancelled
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-info"></i> Open</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-success"></i> Closed</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-regular fa-circle-dot text-danger"></i> Cancelled</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center"><a href="javascript:void(0);"
                                            class="btn btn-sm btn-primary"><i class="fa-solid fa-download me-1"></i>
                                            Download</a></td>
                                    <td class="text-center">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i
                                                        class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                <a href="#" class="dropdown-item"><i
                                                        class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-table">
                <div class="card-header">
                    <h3 class="card-title mb-0">Shortlist Candidates</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap custom-table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Job Title</th>
                                    <th>Departments</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('profile') }}" class="avatar"><img
                                                    src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                            <a href="{{ url('profile') }}">John Doe <span>Web Designer</span></a>
                                        </h2>
                                    </td>
                                    <td><a href="{{ url('job-details') }}">Web Designer</a></td>
                                    <td>Department</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                <i class="fa-regular fa-circle-dot text-danger"></i>Offered
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('profile') }}" class="avatar"><img
                                                    src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                                            <a href="{{ url('profile') }}">Richard Miles <span>Web Developer</span></a>
                                        </h2>
                                    </td>
                                    <td><a href="{{ url('job-details') }}">Web Developer</a></td>
                                    <td>Department</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                <i class="fa-regular fa-circle-dot text-danger"></i>Offered
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('profile') }}" class="avatar"><img
                                                    src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image"></a>
                                            <a href="{{ url('profile') }}">John Smith <span>Android Developer</span></a>
                                        </h2>
                                    </td>
                                    <td><a href="{{ url('job-details') }}">Android Developer</a></td>
                                    <td>Department</td>
                                    <td class="text-center">
                                        <div class="action-label">
                                            <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                <i class="fa-regular fa-circle-dot text-danger"></i>Offered
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection
