<?php $page = 'interviewing'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Interviewing
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Jobs
        @endslot
        @slot('li_3')
            User Dashboard
        @endslot
        @slot('li_4')
            Interviewing
        @endslot
    @endcomponent
    @component('components.navcontents')
    @endcomponent

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-solid nav-justified flex-column">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#home">Apptitude</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#menu1">Schedule Interview</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div id="home" class="tab-pane show active">
                            <div class="card-box">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Job Title</th>
                                                <th>Department</th>
                                                <th class="text-center">Job Type</th>
                                                <th class="text-center">Aptitude Test</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="#">Web Developer</a></td>
                                                <td>Development</td>
                                                <td class="text-center">
                                                    <div class="action-label">
                                                        <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa-regular fa-circle-dot text-danger"></i> Full Time
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ url('job-aptitude') }}"
                                                        class="btn btn-primary aptitude-btn"><span>Click Here</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><a href="#">Web Developer</a></td>
                                                <td>Development</td>
                                                <td class="text-center">
                                                    <div class="action-label">
                                                        <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa-regular fa-circle-dot text-warning"></i> Part Time
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ url('job-aptitude') }}"
                                                        class="btn btn-primary aptitude-btn"><span>Click Here</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><a href="#">Web Designing</a></td>
                                                <td>Development</td>
                                                <td class="text-center">
                                                    <div class="action-label">
                                                        <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa-regular fa-circle-dot text-warning"></i> Part Time
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ url('job-aptitude') }}"
                                                        class="btn btn-primary aptitude-btn"><span>Click Here</span></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="card-box">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Job Title</th>
                                                <th>Department</th>
                                                <th class="text-center">Job Type</th>
                                                <th class="text-center">Aptitude Test</th>
                                                <th class="text-center">Schedule Interview</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="#">Web Developer</a></td>
                                                <td>Development</td>
                                                <td class="text-center">
                                                    <div class="action-label">
                                                        <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa-regular fa-circle-dot text-danger"></i> Full Time
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-primary disabled"><span>Selected</span></a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0);" class="btn btn-primary aptitude-btn"
                                                        data-bs-toggle="modal" data-bs-target="#selectMyTime"><span>Select
                                                            Your Time Here</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="#">Web Designing</a></td>
                                                <td>Development</td>
                                                <td class="text-center">
                                                    <div class="action-label">
                                                        <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa-regular fa-circle-dot text-warning"></i> Part Time
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-primary disabled"><span>Selected</span></a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0);" class="btn btn-primary aptitude-btn"
                                                        data-bs-toggle="modal" data-bs-target="#selectMyTime"><span>Select
                                                            Your Time Here</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="#">Web Developer</a></td>
                                                <td>Development</td>
                                                <td class="text-center">
                                                    <div class="action-label">
                                                        <a class="btn btn-white btn-sm btn-rounded" href="#">
                                                            <i class="fa-regular fa-circle-dot text-warning"></i> Part Time
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-primary disabled"><span>Selected</span></a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0);" class="btn btn-primary aptitude-btn"
                                                        data-bs-toggle="modal" data-bs-target="#selectMyTime"><span>Select
                                                            Your Time Here</span></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Content End -->

    </div>
    <!-- /Page Content -->
    @component('components.model-popup')
    @endcomponent
@endsection
